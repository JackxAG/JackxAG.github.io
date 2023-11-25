// JavaScript para cambiar el contenido del libro al hacer clic en los botones
const prevBookButton = document.getElementById('prev-book-button');
const nextBookButton = document.getElementById('next-book-button');
const bookImage = document.querySelector('.book-image');
const bookName = document.querySelector('.book-name');
const bookPrice = document.querySelector('.book-price');
const bookDescription = document.querySelector('.book-description');

// Lista de libros con sus detalles
const books = [
  {
    image: 'assets/libroterror.PNG',
    name: 'Carmilla',
    price: '$200',
    description: ''
  },
  {
    image: 'assets/libro 2.PNG',
    name: 'Encima de las copas de los arboles',
    price: '$250',
    description: '',
  },
  {
    image: 'assets/libros1.png',
    name: 'Cosas que los nietos deberian saber',
    price: '$220',
    description: '',
  },
  {
    image: 'assets/IT.png',
    name: 'IT: Basado en la Pelicula',
    price: '$100',
    description: '',
  },
  {
    image: 'assets/libro5.png',
    name: 'La Niebla de los Bosques',
    price: '$120',
    description: '',
  },

];

let currentBookIndex = 0;

// Función para actualizar los datos del libro actual
function updateCurrentBook() {
  const currentBook = books[currentBookIndex];
  bookImage.src = currentBook.image;
  bookName.textContent = currentBook.name;
  bookPrice.textContent = currentBook.price;
  bookDescription.textContent = currentBook.description;
}

// Botón para avanzar al siguiente libro
nextBookButton.addEventListener('click', () => {
  currentBookIndex = (currentBookIndex + 1) % books.length;
  updateCurrentBook();
});

// Botón para retroceder al libro anterior
prevBookButton.addEventListener('click', () => {
  currentBookIndex = (currentBookIndex - 1 + books.length) % books.length;
  updateCurrentBook();
});

// Cargar el primer libro
updateCurrentBook();


