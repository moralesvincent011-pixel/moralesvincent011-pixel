<?php
$pageTitle = 'Home - My Portfolio';
include 'includes/header.php';
?>

<!-- Home Section -->
<section id="home" class="home-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-12">
                <div class="home-profile-card">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-center mb-4 mb-lg-0">
                            <div class="profile-image-container">
                                <div class="profile-image-wrapper" data-bs-toggle="modal" data-bs-target="#profileImageModal" data-image="profile-image.png" style="cursor: pointer;">
                                    <img src="profile-image.png" alt="Vincent Morales" class="profile-image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="profile-info">
                                <div class="profile-header mb-4">
                                    <h1 class="profile-name mb-2">Vincent Morales</h1>
                                    <p class="profile-title mb-3">Small Business Owner • Photographer • Developer</p>
                                    <div class="profile-stats mb-4">
                                        <div class="stat-item">
                                            <span class="stat-number">4</span>
                                            <span class="stat-label">Years Experience</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-number">50+</span>
                                            <span class="stat-label">Projects</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-number">100+</span>
                                            <span class="stat-label">Happy Clients</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-bio mb-4">
                                    <p class="mb-3">Welcome to my creative portfolio. I'm a small business owner of Peepz Cafe, a passionate photographer, videographer, and web developer. I love creating beautiful digital experiences and capturing moments through my lens.</p>
                                </div>
                                <div class="profile-actions">
                                    <a href="about.php" class="btn btn-primary me-3">View Portfolio</a>
                                    <a href="contact.php" class="btn btn-outline-primary">Get In Touch</a>
                                </div>
                                <div class="social-links mt-4">
                                    <a href="https://www.instagram.com/vincentmoralesss/" target="_blank" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/moralesvincent011" target="_blank" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" class="social-icon" title="GitHub"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Profile Image Lightbox Modal -->
<div class="modal fade" id="profileImageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="profileModalImage" src="" alt="Full size profile image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
