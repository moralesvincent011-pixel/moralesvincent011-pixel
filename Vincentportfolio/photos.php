<?php
$pageTitle = 'Photos - My Portfolio';
include 'includes/header.php';
?>

<!-- Photos Section -->
<section id="photos" class="photos-section py-5" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title about-title">Photos</h2>
                <p class="section-subtitle">My latest work</p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 col-sm-6">
                <div class="photo-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="photo-1.jpg">
                    <img src="photo-1.jpg" alt="Photo 1" class="img-fluid">
                    <div class="photo-overlay">
                        <div class="photo-info">
                            <i class="fas fa-heart"></i>
                            <span>125</span>
                            <i class="fas fa-comment ms-3"></i>
                            <span>12</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="photo-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="photo-2.jpg">
                    <img src="photo-2.jpg" alt="Photo 2" class="img-fluid">
                    <div class="photo-overlay">
                        <div class="photo-info">
                            <i class="fas fa-heart"></i>
                            <span>98</span>
                            <i class="fas fa-comment ms-3"></i>
                            <span>8</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="photo-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="photo-3.jpg">
                    <img src="photo-3.jpg" alt="Photo 3" class="img-fluid">
                    <div class="photo-overlay">
                        <div class="photo-info">
                            <i class="fas fa-heart"></i>
                            <span>156</span>
                            <i class="fas fa-comment ms-3"></i>
                            <span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="photo-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="photo-4.jpg">
                    <img src="photo-4.jpg" alt="Photo 4" class="img-fluid">
                    <div class="photo-overlay">
                        <div class="photo-info">
                            <i class="fas fa-heart"></i>
                            <span>203</span>
                            <i class="fas fa-comment ms-3"></i>
                            <span>22</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="photo-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="photo-5.jpg">
                    <img src="photo-5.jpg" alt="Photo 5" class="img-fluid">
                    <div class="photo-overlay">
                        <div class="photo-info">
                            <i class="fas fa-heart"></i>
                            <span>87</span>
                            <i class="fas fa-comment ms-3"></i>
                            <span>6</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="photo-card" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="photo-6.jpg">
                    <img src="photo-6.jpg" alt="Photo 6" class="img-fluid">
                    <div class="photo-overlay">
                        <div class="photo-info">
                            <i class="fas fa-heart"></i>
                            <span>142</span>
                            <i class="fas fa-comment ms-3"></i>
                            <span>18</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Lightbox Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="modalImage" src="" alt="Full size image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

