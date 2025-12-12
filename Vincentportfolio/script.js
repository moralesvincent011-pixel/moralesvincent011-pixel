// Form validation (client-side validation before PHP processing)
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        
        if (!name || !email || !message) {
            e.preventDefault();
            alert('Please fill in all fields.');
            return false;
        }
        
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            e.preventDefault();
            alert('Please enter a valid email address.');
            return false;
        }
    });
}

// Image Lightbox Modal
const imageModal = document.getElementById('imageModal');
if (imageModal) {
    imageModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const imageSrc = button.getAttribute('data-image');
        const modalImage = document.getElementById('modalImage');
        if (modalImage) {
            modalImage.src = imageSrc;
            modalImage.alt = 'Full size image';
        }
    });
}

// Profile Image Lightbox Modal
const profileImageModal = document.getElementById('profileImageModal');
if (profileImageModal) {
    profileImageModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const imageSrc = button.getAttribute('data-image');
        const modalImage = document.getElementById('profileModalImage');
        if (modalImage) {
            modalImage.src = imageSrc;
            modalImage.alt = 'Full size profile image';
        }
    });
}

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-up');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all sections
document.querySelectorAll('section > .container').forEach(section => {
    observer.observe(section);
});
