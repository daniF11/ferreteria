<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from freshcart.codescandy.com/pages/shop-grid-3-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Nov 2023 12:57:37 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta content="Codescandy" name="author" />
      <title>Shop Grid 3 Column eCommerce HTML Template - FreshCart</title>
      <link href="../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
      <link href="../assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet" />
      <!-- Favicon icon-->
      <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico" />

      <!-- Libs CSS -->
      <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
      <link href="../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
      <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

      <!-- Theme CSS -->
      <link rel="stylesheet" href="../assets/css/theme.min.css" />
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag() {
            dataLayer.push(arguments);
         }
         gtag("js", new Date());

         gtag("config", "G-M8S4MT3EYG");
      </script>
   </head>

   <body>
      <!-- navbar -->
      <?php
      include ("narvar.php");
   ?>
      <!-- Modal -->
      <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
               <div class="modal-header border-0">
                  <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form class="needs-validation" novalidate>
                     <div class="mb-3">
                        <label for="fullName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required />
                        <div class="invalid-feedback">Please enter name.</div>
                     </div>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email address" required />
                        <div class="invalid-feedback">Please enter email.</div>
                     </div>
                     <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" required />
                        <div class="invalid-feedback">Please enter password.</div>
                        <small class="form-text">
                           By Signup, you agree to our
                           <a href="#!">Terms of Service</a>
                           &
                           <a href="#!">Privacy Policy</a>
                        </small>
                     </div>

                     <button type="submit" class="btn btn-primary" type="submit">Sign Up</button>
                  </form>
               </div>
               <div class="modal-footer border-0 justify-content-center">
                  Already have an account?
                  <a href="#">Sign in</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Shop Cart -->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
         <div class="offcanvas-header border-bottom">
            <div class="text-start">
               <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
               <small>Location in 382480</small>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <div>
               <!-- alert -->
               <div class="alert alert-danger p-2" role="alert">
                  You’ve got FREE delivery. Start
                  <a href="#!" class="alert-link">checkout now!</a>
               </div>
               <ul class="list-group list-group-flush">
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0 border-top">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                 </a>
                                 <span><small class="text-muted">.98 / lb</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$5.00</span>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">NutriChoice Digestive</h6>
                                 </a>
                                 <span><small class="text-muted">250g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold text-danger">$20.00</span>
                           <div class="text-decoration-line-through text-muted small">$26.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                 </a>
                                 <span><small class="text-muted">1 kg</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Onion Flavour Potato</h6>
                                 </a>
                                 <span><small class="text-muted">250g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0 border-bottom">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Salted Instant Popcorn</h6>
                                 </a>
                                 <span><small class="text-muted">100g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$25.00</div>
                        </div>
                     </div>
                  </li>
               </ul>
               <!-- btn -->
               <div class="d-flex justify-content-between mt-4">
                  <a href="#!" class="btn btn-primary">Continue Shopping</a>
                  <a href="#!" class="btn btn-dark">Update Cart</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-6">
                  <div class="d-flex justify-content-between align-items-start">
                     <div>
                        <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                        <p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
                     </div>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="my-5">
                     <input type="search" class="form-control" placeholder="Search your area" />
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <h6 class="mb-0">Select Location</h6>
                     <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>
                  </div>
                  <div>
                     <div data-simplebar style="height: 300px">
                        <div class="list-group list-group-flush">
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                              <span>Alabama</span>
                              <span>Min:$20</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Alaska</span>
                              <span>Min:$30</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Arizona</span>
                              <span>Min:$50</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>California</span>
                              <span>Min:$29</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Colorado</span>
                              <span>Min:$80</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Florida</span>
                              <span>Min:$90</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Arizona</span>
                              <span>Min:$50</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>California</span>
                              <span>Min:$29</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Colorado</span>
                              <span>Min:$80</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Florida</span>
                              <span>Min:$90</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="../assets/js/vendors/validation.js"></script>

      <main>
         <!-- section-->
         <div class="mt-4">
            <div class="container">
               <!-- row -->
               <div class="row">
                  <!-- col -->
                  <div class="col-12">
                     <!-- breadcrumb -->
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                           <li class="breadcrumb-item"><a href="#!">Home</a></li>
                           <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Snacks & Munchies</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- section -->
         <div class="mt-8 mb-lg-14 mb-8">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row gx-10">
                  <!-- col -->
                  <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                     <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50" tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">
                        <div class="offcanvas-header d-lg-none">
                           <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ps-lg-2 pt-lg-0">
                           <div class="mb-8">
                              <!-- title -->
                              <h5 class="mb-3">Categories</h5>
                              <!-- nav -->
                              <ul class="nav nav-category" id="categoryCollapseMenu">
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#categoryFlushOne" aria-expanded="false" aria-controls="categoryFlushOne">
                                       Dairy, Bread & Eggs
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>
                                    <!-- accordion collapse -->
                                    <div id="categoryFlushOne" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <!-- nav -->

                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Milk</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Milk Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Curd & Yogurt</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Eggs</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Bread</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Buns & Bakery</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Butter & More</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cheese</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Paneer & Tofu</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cream & Whitener</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Condensed Milk</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Vegan Drinks</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <!-- nav item -->
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                       Snacks & Munchies
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Chips & Crisps</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Nachos</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Popcorn</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Bhujia & Mixtures</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Namkeen Snacks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Healthy Snacks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Cakes & Rolls</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Energy Bars</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Papad & Fryums</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Rusks & Wafers</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       Fruits & Vegetables
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Fresh Vegetables</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Herbs & Seasonings</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Fresh Fruits</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Organic Fruits & Vegetables</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cuts & Sprouts</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Exotic Fruits & Veggies</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Flower Bouquets, Bunches</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                       Cold Drinks & Juices
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Soft Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Fruit Juices</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Coldpress</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Energy Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Water & Ice Cubes</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Soda & Mixers</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Concentrates & Syrups</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Detox & Energy Drinks</a></li>
                                             <!-- nav item -->
                                             <li class="nav-item"><a href="#!" class="nav-link">Juice Collection</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>

                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                       Breakfast & Instant Food
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Batter</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Breakfast Cereal</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Noodles, Pasta & Soup</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Non-Veg Snackss</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Veg</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Vermicelli</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Instant Mixes</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                       Bakery & Biscuits
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Cookies</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Glucose & Marie</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Sweet & Salty</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Healthy & Digestive</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cream Biscuits</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Rusks & Wafers</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Cakes & Rolls</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Buns & Bakery</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="nav-item border-bottom w-100">
                                    <a href="#" class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                       Chicken, Meat & Fish
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>

                                    <!-- collapse -->
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#categoryCollapseMenu">
                                       <div>
                                          <ul class="nav flex-column ms-3">
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#!">Chicken</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Sausage, Salami & Ham</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Exotic Meat</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Eggs</a>
                                             </li>
                                             <!-- nav item -->
                                             <li class="nav-item">
                                                <a class="nav-link" href="#!">Frozen Non-Veg Snacks</a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>

                           <div class="mb-8">
                              <h5 class="mb-3">Stores</h5>
                              <div class="my-4">
                                 <!-- input -->
                                 <input type="search" class="form-control" placeholder="Search by store" />
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="eGrocery" checked />
                                 <label class="form-check-label" for="eGrocery">E-Grocery</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="DealShare" />
                                 <label class="form-check-label" for="DealShare">DealShare</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="Dmart" />
                                 <label class="form-check-label" for="Dmart">DMart</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="Blinkit" />
                                 <label class="form-check-label" for="Blinkit">Blinkit</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="BigBasket" />
                                 <label class="form-check-label" for="BigBasket">BigBasket</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="StoreFront" />
                                 <label class="form-check-label" for="StoreFront">StoreFront</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="Spencers" />
                                 <label class="form-check-label" for="Spencers">Spencers</label>
                              </div>
                              <!-- form check -->
                              <div class="form-check mb-2">
                                 <!-- input -->
                                 <input class="form-check-input" type="checkbox" value="" id="onlineGrocery" />
                                 <label class="form-check-label" for="onlineGrocery">Online Grocery</label>
                              </div>
                           </div>
                           <div class="mb-8">
                              <!-- price -->
                              <h5 class="mb-3">Price</h5>
                              <div>
                                 <!-- range -->
                                 <div id="priceRange" class="mb-3"></div>
                                 <small class="text-muted">Price:</small>
                                 <span id="priceRange-value" class="small"></span>
                              </div>
                           </div>
                           <!-- rating -->
                           <div class="mb-8">
                              <h5 class="mb-3">Rating</h5>
                              <div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingFive" />
                                    <label class="form-check-label" for="ratingFive">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                    </label>
                                 </div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingFour" checked />
                                    <label class="form-check-label" for="ratingFour">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                    </label>
                                 </div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingThree" />
                                    <label class="form-check-label" for="ratingThree">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                    </label>
                                 </div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingTwo" />
                                    <label class="form-check-label" for="ratingTwo">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                    </label>
                                 </div>
                                 <!-- form check -->
                                 <div class="form-check mb-2">
                                    <!-- input -->
                                    <input class="form-check-input" type="checkbox" value="" id="ratingOne" />
                                    <label class="form-check-label" for="ratingOne">
                                       <i class="bi bi-star-fill text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                       <i class="bi bi-star text-warning"></i>
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-8 position-relative">
                              <!-- Banner Design -->
                              <!-- Banner Content -->
                              <div class="position-absolute p-5 py-8">
                                 <h3 class="mb-0">Fresh Fruits</h3>
                                 <p>Get Upto 25% Off</p>
                                 <a href="#" class="btn btn-dark">
                                    Shop Now
                                    <i class="feather-icon icon-arrow-right ms-1"></i>
                                 </a>
                              </div>
                              <!-- Banner Content -->
                              <!-- Banner Image -->
                              <!-- img -->
                              <img src="../assets/images/banner/assortment-citrus-fruits.png" alt="" class="img-fluid rounded" />
                              <!-- Banner Image -->
                           </div>
                        </div>
                     </div>
                  </aside>
                  <section class="col-lg-9 col-md-12">
                     <!-- card -->
                     <div class="card mb-4 bg-light border-0">
                        <!-- card body -->
                        <div class="card-body p-9">
                           <h2 class="mb-0 fs-1">Snacks & Munchies</h2>
                        </div>
                     </div>
                     <!-- list icon -->
                     <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                           <p class="mb-0">
                              <span class="text-dark">24</span>
                              Products found
                           </p>
                        </div>

                        <!-- icon -->
                        <div class="d-md-flex justify-content-between align-items-center">
                           <div class="d-flex align-items-center justify-content-between">
                              <div>
                                 <a href="shop-list.html" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
                                 <a href="shop-grid.html" class="me-3 text-muted"><i class="bi bi-grid"></i></a>
                                 <a href="shop-grid-3-column.html" class="me-3 active"><i class="bi bi-grid-3x3-gap"></i></a>
                              </div>
                              <div class="ms-2 d-lg-none">
                                 <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas" href="#offcanvasCategory" role="button" aria-controls="offcanvasCategory">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="14"
                                       height="14"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-filter me-2">
                                       <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                    </svg>
                                    Filters
                                 </a>
                              </div>
                           </div>

                           <div class="d-flex mt-2 mt-lg-0">
                              <div class="me-2 flex-grow-1">
                                 <!-- select option -->
                                 <select class="form-select">
                                    <option selected>Show: 50</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                 </select>
                              </div>
                              <div>
                                 <!-- select option -->
                                 <select class="form-select">
                                    <option selected>Sort by: Featured</option>
                                    <option value="Low to High">Price: Low to High</option>
                                    <option value="High to Low">Price: High to Low</option>
                                    <option value="Release Date">Release Date</option>
                                    <option value="Avg. Rating">Avg. Rating</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row g-4 row-cols-xl-3 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <!-- badge -->
                                 <div class="text-center position-relative">
                                    <div class="position-absolute top-0 start-0">
                                       <span class="badge bg-danger">Sale</span>
                                    </div>
                                    <a href="shop-single.html">
                                       <!-- img -->
                                       <img src="../assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                    </a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                                 <div>
                                    <!-- rating -->
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5(149)</span>
                                 </div>
                                 <!-- price -->
                                 <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                       <span class="text-dark">$18</span>
                                       <span class="text-decoration-line-through text-muted">$24</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <div class="text-center position-relative">
                                    <div class="position-absolute top-0 start-0">
                                       <span class="badge bg-success">14%</span>
                                    </div>

                                    <a href="shop-single.html">
                                       <!-- img -->
                                       <img src="../assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                    </a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">NutriChoice Digestive</a></h2>
                                 <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5 (25)</span>
                                 </div>
                                 <!-- price -->
                                 <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$24</span></div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <div class="text-center position-relative">
                                    <a href="shop-single.html"><img src="../assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Cadbury 5 Star Chocolate</a></h2>
                                 <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                    </small>
                                    <span class="text-muted small">5 (469)</span>
                                 </div>
                                 <!-- price -->
                                 <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                       <span class="text-dark">$32</span>
                                       <span class="text-decoration-line-through text-muted">$35</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <div class="text-center position-relative">
                                    <div class="position-absolute top-0">
                                       <span class="badge bg-danger">Hot</span>
                                    </div>

                                    <a href="shop-single.html">
                                       <!-- img -->
                                       <img src="../assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                    </a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                                 <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                       <i class="bi bi-star"></i>
                                    </small>
                                    <span class="text-muted small">3.5 (456)</span>
                                 </div>
                                 <!-- price -->
                                 <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                       <span class="text-dark">$3</span>
                                       <span class="text-decoration-line-through text-muted">$5</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <div class="text-center position-relative">
                                    <a href="shop-single.html"><img src="../assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Salted Instant Popcorn</a></h2>
                                 <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5 (39)</span>
                                 </div>
                                 <div class="d-flex justify-content-between mt-4">
                                    <div>
                                       <span class="text-dark">$13</span>
                                       <span class="text-decoration-line-through text-muted">$18</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <!-- badge -->
                                 <div class="text-center position-relative">
                                    <div class="position-absolute top-0 start-0">
                                       <span class="badge bg-danger">Sale</span>
                                    </div>
                                    <a href="shop-single.html">
                                       <!-- img -->
                                       <img src="../assets/images/products/product-img-6.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                                    </a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Blueberry Greek Yogurt</a></h2>
                                 <div>
                                    <!-- rating -->
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5 (189)</span>
                                 </div>
                                 <!-- price -->
                                 <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                       <span class="text-dark">$18</span>
                                       <span class="text-decoration-line-through text-muted">$24</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <div class="text-center position-relative">
                                    <a href="shop-single.html"><img src="../assets/images/products/product-img-7.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Britannia Cheese Slices</a></h2>
                                 <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                    </small>
                                    <span class="text-muted small">5 (345)</span>
                                 </div>
                                 <!-- price -->
                                 <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$24</span></div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <div class="text-center position-relative">
                                    <a href="shop-single.html"><img src="../assets/images/products/product-img-8.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Kellogg's Original Cereals</a></h2>
                                 <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4 (90)</span>
                                 </div>
                                 <!-- price -->
                                 <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                       <span class="text-dark">$32</span>
                                       <span class="text-decoration-line-through text-muted">$35</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <div class="text-center position-relative">
                                    <a href="shop-single.html"><img src="../assets/images/products/product-img-9.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Slurrp Millet Chocolate</a></h2>
                                 <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span class="text-muted small">4.5 (67)</span>
                                 </div>
                                 <!-- price -->
                                 <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                       <span class="text-dark">$3</span>
                                       <span class="text-decoration-line-through text-muted">$5</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                           <!-- card -->
                           <div class="card card-product">
                              <div class="card-body">
                                 <div class="text-center position-relative">
                                    <a href="shop-single.html"><img src="../assets/images/products/product-img-10.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                                    <!-- action btn -->
                                    <div class="card-product-action">
                                       <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                          <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                       </a>
                                       <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                       <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                 </div>
                                 <!-- heading -->
                                 <div class="text-small mb-1">
                                    <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                                 </div>
                                 <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Amul Butter - 500 g</a></h2>
                                 <div class="text-warning">
                                    <!-- rating -->
                                    <small>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                       <i class="bi bi-star"></i>
                                    </small>
                                    <span class="text-muted small">3.5 (89)</span>
                                 </div>
                                 <div class="d-flex justify-content-between mt-4">
                                    <div>
                                       <span class="text-dark">$13</span>
                                       <span class="text-decoration-line-through text-muted">$18</span>
                                    </div>
                                    <!-- btn -->
                                    <div>
                                       <a href="#!" class="btn btn-primary btn-sm">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="16"
                                             height="16"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-plus">
                                             <line x1="12" y1="5" x2="12" y2="19"></line>
                                             <line x1="5" y1="12" x2="19" y2="12"></line>
                                          </svg>
                                          Add
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row mt-8">
                        <div class="col">
                           <!-- nav -->
                           <nav>
                              <ul class="pagination">
                                 <li class="page-item disabled">
                                    <a class="page-link mx-1" href="#" aria-label="Previous">
                                       <i class="feather-icon icon-chevron-left"></i>
                                    </a>
                                 </li>
                                 <li class="page-item"><a class="page-link mx-1 active" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link mx-1" href="#">2</a></li>

                                 <li class="page-item"><a class="page-link mx-1" href="#">...</a></li>
                                 <li class="page-item"><a class="page-link mx-1" href="#">12</a></li>
                                 <li class="page-item">
                                    <a class="page-link mx-1" href="#" aria-label="Next">
                                       <i class="feather-icon icon-chevron-right"></i>
                                    </a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </main>

      <!-- modal -->
      <!-- Modal -->
      <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-8">
                  <div class="position-absolute top-0 end-0 me-3 mt-3">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-1.jpg)">
                              <!-- img -->
                              <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-2.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                              </div>
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-3.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                              </div>
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-4.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                              </div>
                           </div>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                           <div class="thumbnails row g-3" id="productModalThumbnails">
                              <div class="col-3" class="tns-nav-active">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="ps-lg-8 mt-6 mt-lg-0">
                           <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
                           <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
                           <div class="mb-4">
                              <small class="text-warning">
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <a href="#" class="ms-2">(30 reviews)</a>
                           </div>
                           <div class="fs-4">
                              <span class="fw-bold text-dark">$32</span>
                              <span class="text-decoration-line-through text-muted">$35</span>
                              <span><small class="fs-6 ms-2 text-danger">26% Off</small></span>
                           </div>
                           <hr class="my-6" />
                           <div class="mb-4">
                              <button type="button" class="btn btn-outline-secondary">250g</button>
                              <button type="button" class="btn btn-outline-secondary">500g</button>
                              <button type="button" class="btn btn-outline-secondary">1kg</button>
                           </div>
                           <div>
                              <!-- input -->
                              <!-- input -->
                              <div class="input-group input-spinner">
                                 <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                 <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                 <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                              </div>
                           </div>
                           <div class="mt-3 row justify-content-start g-2 align-items-center">
                              <div class="col-lg-4 col-md-5 col-6 d-grid">
                                 <!-- button -->
                                 <!-- btn -->
                                 <button type="button" class="btn btn-primary">
                                    <i class="feather-icon icon-shopping-bag me-2"></i>
                                    Add to cart
                                 </button>
                              </div>
                              <div class="col-md-4 col-5">
                                 <!-- btn -->
                                 <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 <a class="btn btn-light" href="#!" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                              </div>
                           </div>
                           <hr class="my-6" />
                           <div>
                              <table class="table table-borderless">
                                 <tbody>
                                    <tr>
                                       <td>Product Code:</td>
                                       <td>FBB00255</td>
                                    </tr>
                                    <tr>
                                       <td>Availability:</td>
                                       <td>In Stock</td>
                                    </tr>
                                    <tr>
                                       <td>Type:</td>
                                       <td>Fruits</td>
                                    </tr>
                                    <tr>
                                       <td>Shipping:</td>
                                       <td>
                                          <small>
                                             01 day shipping.
                                             <span class="text-muted">( Free pickup today)</span>
                                          </small>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Footer -->
      <!-- footer -->
      <footer class="footer">
         <div class="container">
            <div class="row g-4 py-4">
               <div class="col-12 col-md-12 col-lg-4">
                  <h6 class="mb-4">Categories</h6>
                  <div class="row">
                     <div class="col-6">
                        <!-- list -->
                        <ul class="nav flex-column">
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables & Fruits</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Breakfast & instant food</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Bakery & Biscuits</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Atta, rice & dal</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Sauces & spreads</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Organic & gourmet</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Baby care</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Cleaning essentials</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Personal care</a></li>
                        </ul>
                     </div>
                     <div class="col-6">
                        <!-- list -->
                        <ul class="nav flex-column">
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread & eggs</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Cold drinks & juices</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Tea, coffee & drinks</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Masala, oil & more</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Chicken, meat & fish</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Paan corner</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Pharma & wellness</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Home & office</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Pet care</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-12 col-lg-8">
                  <div class="row g-4">
                     <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">Get to know us</h6>
                        <!-- list -->
                        <ul class="nav flex-column">
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
                           <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
                        </ul>
                     </div>
                     <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">For Consumers</h6>
                        <ul class="nav flex-column">
                           <!-- list -->
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
                           <li class="nav-item mb-2"><a href="shop-checkout.html" class="nav-link">Shop Checkout</a></li>
                        </ul>
                     </div>
                     <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">Become a Shopper</h6>
                        <ul class="nav flex-column">
                           <!-- list -->
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper Opportunities</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas & Guides</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a></li>
                        </ul>
                     </div>
                     <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">Freshcart programs</h6>
                        <ul class="nav flex-column">
                           <!-- list -->
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart programs</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos & Coupons</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a></li>
                           <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="border-top py-4">
               <div class="row align-items-center">
                  <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
                     <ul class="list-inline mb-0">
                        <li class="list-inline-item text-dark">Payment Partners</li>
                        <li class="list-inline-item">
                           <a href="#!"><img src="../assets/images/payment/amazonpay.svg" alt="" /></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#!"><img src="../assets/images/payment/american-express.svg" alt="" /></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#!"><img src="../assets/images/payment/mastercard.svg" alt="" /></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#!"><img src="../assets/images/payment/paypal.svg" alt="" /></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#!"><img src="../assets/images/payment/visa.svg" alt="" /></a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-7 mt-4 mt-md-0">
                     <ul class="list-inline mb-0 text-lg-end text-center">
                        <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
                        <li class="list-inline-item ms-4">
                           <a href="#!"><img src="../assets/images/appbutton/appstore-btn.svg" alt="" style="width: 140px" /></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#!"><img src="../assets/images/appbutton/googleplay-btn.svg" alt="" style="width: 140px" /></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="border-top py-4">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <span class="small text-muted">
                        © 2022
                        <span id="copyright">
                           -
                           <script>
                              document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                           </script>
                        </span>
                        FreshCart eCommerce HTML Template. All rights reserved. Powered by
                        <a href="https://codescandy.com/">Codescandy</a>
                        .
                     </span>
                  </div>
                  <div class="col-md-6">
                     <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
                        <li class="list-inline-item text-muted">Follow us on</li>
                        <li class="list-inline-item me-1">
                           <a href="#!" class="btn btn-xs btn-social btn-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                 <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                              </svg>
                           </a>
                        </li>
                        <li class="list-inline-item me-1">
                           <a href="#!" class="btn btn-xs btn-social btn-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                 <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                              </svg>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#!" class="btn btn-xs btn-social btn-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                 <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Javascript-->
      <script src="../assets/libs/nouislider/dist/nouislider.min.js"></script>
      <script src="../assets/libs/wnumb/wNumb.min.js"></script>
      <!-- Libs JS -->
      <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

      <!-- Theme JS -->
      <script src="../assets/js/theme.min.js"></script>

      <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
      <script src="../assets/js/vendors/tns-slider.js"></script>
      <script src="../assets/js/vendors/zoom.js"></script>
   </body>

<!-- Mirrored from freshcart.codescandy.com/pages/shop-grid-3-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Nov 2023 12:57:38 GMT -->
</html>
