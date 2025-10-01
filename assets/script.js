let currentNoteId = null;
const textarea = document.getElementById('noteContent');
let lastContent = '';

function fetchNotes() {
    fetch('list_notes.php')
        .then(res => res.json())
        .then(notes => {
            const noteList = document.getElementById('noteList');
            noteList.innerHTML = '';
            notes.forEach(note => {
                const btn = document.createElement('button');
                btn.textContent = note.title;
                btn.onclick = () => loadNote(note.id);
                noteList.appendChild(btn);
            });
        });
}

function loadNote(id) {
    currentNoteId = id;
    fetch('load_note.php?id=' + id)
        .then(res => res.text())
        .then(content => {
            textarea.value = content;
            lastContent = content;
        });
}

function saveNote() {
    if (!currentNoteId) return;
    const content = textarea.value;
    if (content === lastContent) return;
    lastContent = content;
    fetch('save_note.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'id=' + currentNoteId + '&content=' + encodeURIComponent(content)
    });
}

function syncContent() {
    if (!currentNoteId || document.activeElement === textarea) return;
    fetch('load_note.php?id=' + currentNoteId)
        .then(res => res.text())
        .then(content => {
            if (content !== lastContent) {
                textarea.value = content;
                lastContent = content;
            }
        });
}

function createNote(title) {
    fetch('create_note.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'title=' + encodeURIComponent(title)
    })
    .then(res => res.text())
    .then(id => {
        fetchNotes();
        loadNote(id);
    });
}

document.getElementById('toggleList').onclick = () => {
    const list = document.getElementById('noteList');
    list.style.display = (list.style.display === 'none' ? 'block' : 'none');
};

textarea.addEventListener('input', () => {
    saveNote();
});

setInterval(syncContent, 1000);
fetchNotes();
