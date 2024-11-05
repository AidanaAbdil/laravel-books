const loadLatestBooks = async () => {
    const response = await fetch('/api/books/latest');
    const data = await response.json();
    console.log(data)
    return data;
    
}

const books = await loadLatestBooks();
console.log(books)
const latestBooks = document.getElementById("latest-books");

books.forEach(book => {
    
    latestBooks.innerHTML += `
        <p>${book.title}</p>
        <img src="${book.image}">
        <p>${book.description}}</p>`;
});