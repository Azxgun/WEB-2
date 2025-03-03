document.addEventListener('DOMContentLoaded', () => {
	const navLinks = document.querySelectorAll('.nav-item .nav-link[href^="#"]');

	navLinks.forEach((link) => {
		link.addEventListener('click', (event) => {
			console.log('alok');
			event.preventDefault();

			const targetId = link.getAttribute('href');
			const targetElement = document.querySelector(targetId);

			if (targetId) {
				targetElement.scrollIntoView({behavior: 'smooth', block: 'start'});
			}
		});
	});
});

// document.addEventListener("DOMContentLoaded", function () {
//     const filterButtons = document.querySelectorAll(".filter-button");
//     const bookItems = document.querySelectorAll(".book-item");

//     filterButtons.forEach(button => {
//         button.addEventListener("click", () => {
//             const filter = button.getAttribute("data-filter");

//             // Reset all book items
//             bookItems.forEach(item => {
//                 item.style.display = "none";
//             });

//             // Show filtered items
//             if (filter === "all") {
//                 bookItems.forEach(item => {
//                     item.style.display = "block";
//                 });
//             } else {
//                 document.querySelectorAll(`.book-item.${filter}`).forEach(item => {
//                     item.style.display = "block";
//                 });
//             }

//             // Update button active state
//             filterButtons.forEach(btn => btn.classList.remove("btn-primary"));
//             button.classList.add("btn-primary");
//         });
//     });
// });




