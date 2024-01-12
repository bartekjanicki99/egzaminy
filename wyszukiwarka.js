const searchInput = document.getElementById("searchInput");
const searchButton = document.getElementById("searchButton");
const searchResults = document.getElementById("searchResults");
const furySections = document.querySelectorAll(".fury");

// Funkcja obsługująca wyszukiwanie w sekcji
function search() {
    // Pobierz tekst wprowadzony przez użytkownika
    const searchText = searchInput.value.toLowerCase();

    // Zresetuj wyniki wyszukiwania
    searchResults.innerHTML = "";

    furySections.forEach(section => {
        const sectionText = section.textContent.toLowerCase();
        if (sectionText.includes(searchText)) {
            // Jeśli tekst wyszukiwany jest zawarty w sekcji, wyświetl sekcję w wynikach
            searchResults.appendChild(section.cloneNode(true));
        }
    });
}

// Nasłuchuj kliknięcie przycisku "Szukaj"
searchButton.addEventListener("click", search);

// Nasłuchuj naciśnięcie klawisza Enter w polu tekstowym
searchInput.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        search();
    }
});