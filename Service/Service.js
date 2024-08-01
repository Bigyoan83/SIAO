function addToggleEvent(buttonId, dropdownId) {
    document.getElementById(buttonId).addEventListener('click', function() {
        const dropdown = document.getElementById(dropdownId);
        dropdown.classList.toggle('show');
    });
}

const togglePairs = [
    { button: 'histoire', dropdown: 'down_histoire' },
    { button: 'mission', dropdown: 'down_mission' },
    { button: 'valeur', dropdown: 'down_valeur' },
];

togglePairs.forEach(pair => {
    addToggleEvent(pair.button, pair.dropdown);
});