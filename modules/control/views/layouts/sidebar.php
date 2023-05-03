<?php

use yii\helpers\Url;
?>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= Url::to(['site/index']) ?>">
          <i class="bi bi-speedometer2"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-boxes"></i><span>Brand</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['/control/brands/create']) ?>">
              <i class="bi bi-circle"></i><span>Add Brand</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['/control/brands/index']) ?>">
              <i class="bi bi-circle"></i><span>Manage Brand</span>
            </a>
          </li>
        </ul>
      </li><!-- End Brand Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid-fill"></i><span>Product Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['/control/categories/create']) ?> ">
              <i class="bi bi-circle"></i><span>Add Product Categories</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['/control/categories/index']) ?> ">
              <i class="bi bi-circle"></i><span>Manage Product Categories</span>
            </a>
          </li>
        </ul>
      </li><!-- End Product Category Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid-3x2"></i><span>Product Sub Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['/control/subcategories/create']) ?>">
              <i class="bi bi-circle"></i><span>Add Product Sub Category</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['/control/subcategories/index']) ?>">
              <i class="bi bi-circle"></i><span>Manage Product Sub Category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Product Sub Category Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid-3x3-gap"></i><span>Product </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['/control/products/create']) ?>">
              <i class="bi bi-circle"></i><span>Add Product </span>
            </a>
          </li>
        
                </ul>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['/control/products/index']) ?>">
              <i class="bi bi-circle"></i><span>Manage Product </span>
            </a>
          </li>
        
                </ul>
      </li><!-- End Manage Product Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icoons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-images"></i><span>Home Photo</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icoons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['/control/homephotos/create']) ?>">
              <i class="bi bi-circle"></i><span>Add Home Photo</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['/control/homephotos/index']) ?>">
              <i class="bi bi-circle"></i><span>Manage Home Photo</span>
            </a>
          </li>
        
        </ul>
      </li><!-- End Manage Home Photo Nav -->
    
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-info-circle"></i><span>Site Information</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= Url::to(['/control/infosites/create']) ?>">
              <i class="bi bi-circle"></i><span>Add Site Information</span>
            </a>
          </li>
          <li>
            <a href="<?= Url::to(['/control/infosites/index']) ?>">
              <i class="bi bi-circle"></i><span>Manage Site Information</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End SIte Information Nav -->

    </ul>

  </aside>
  