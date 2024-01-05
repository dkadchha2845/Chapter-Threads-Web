document.addEventListener('DOMContentLoaded', function () {
    const searchBar = document.getElementById('searchBar');
    const resultsContainer = document.getElementById('results');

    searchBar.addEventListener('input', function () {
        const searchTerm = searchBar.value.trim().toLowerCase(); // Trim whitespace and convert to lowercase
        if (searchTerm.length >= 3) {
            // For simplicity, assume booksData is an array of book objects
            const filteredBooks = booksData.filter(book =>
                book.name.toLowerCase().includes(searchTerm)
            );

            displayResults(filteredBooks);
        } else {
            resultsContainer.style.display = 'none';
        }
    });

    function displayResults(books) {
        resultsContainer.innerHTML = '';

        if (books.length > 0) {
            resultsContainer.style.display = 'flex';

            books.forEach(book => {
                const resultItem = document.createElement('div');
                resultItem.classList.add('result-item');

                const bookContainer = document.createElement('div');
                bookContainer.classList.add('book-container');

                const bookImage = document.createElement('img');
                bookImage.src = book.imageUrl;
                bookImage.alt = book.name;

                const bookDetails = document.createElement('div');
                bookDetails.classList.add('book-details');

                const bookTitle = document.createElement('p');
                bookTitle.textContent = book.name;

                const actionButton = document.createElement('button');
                actionButton.classList.add('bt');

                if (book.isFree) {
                    actionButton.textContent = 'Read Now';
                    actionButton.addEventListener('click', function () {
                        // Implement the action when the "Read Now" button is clicked
                        console.log('Read Now clicked for:', book.name);
                    });
                } else {
                    actionButton.textContent = `Buy Now - ${book.price}`;
                    actionButton.addEventListener('click', function () {
                        // Implement the action when the "Buy Now" button is clicked
                        console.log('Buy Now clicked for:', book.name);
                    });
                }

                const wishlistButton = document.createElement('button');
                wishlistButton.innerHTML = `
                    <button class="add-to-cart">
                        <i class="fas fa-heart wishlist-icon add-to-cart" title="Wishlist">&nbsp;Wishlist</i>
                    </button>
                `;
                wishlistButton.addEventListener('click', function () {
                    // Implement the action when the "Wishlist" button is clicked
                    console.log('Wishlist clicked for:', book.name);
                });

                bookDetails.appendChild(bookTitle);
                bookDetails.appendChild(actionButton);
                bookDetails.appendChild(wishlistButton);

                bookContainer.appendChild(bookImage);
                bookContainer.appendChild(bookDetails);

                resultItem.appendChild(bookContainer);

                resultItem.addEventListener('click', function () {
                    searchBar.value = book.name;
                    resultsContainer.style.display = 'none';
                });

                resultsContainer.appendChild(resultItem);
            });
        } else {
            resultsContainer.style.display = 'block';

            const notFoundMessage = document.createElement('div');
            notFoundMessage.classList.add('not-found-message');
            notFoundMessage.textContent = 'No Book or Author found';

            resultsContainer.appendChild(notFoundMessage);
        }
    }

    // Sample data
    const booksData = [
        {
            name: 'A Ruthless Proportion',
            imageUrl: 'P1.png',
            isFree: true,
        },
        {
            name: 'An Exorcist explains the Demonic',
            imageUrl: 'P2.png',
            isFree: true,
        },
        {
            name: 'Unfollow: A journey from hatred to hope',
            imageUrl: 'P3.png',
            isFree: true,
        },
        {
            name: 'Harry Potter and the Order of Phoenix',
            imageUrl: 'P4.png',
            isFree: false,
            price: '₹325',
        },
        {
            name: 'Harry Potter and the Prisoner of Azkaban',
            imageUrl: 'P5.png',
            isFree: false,
            price: '₹325',
        },
        {
            name: 'Harry Potter and the Half-Blood Prince',
            imageUrl: 'P6.png',
            isFree: false,
            price: '₹325',
        },
    ];
});
