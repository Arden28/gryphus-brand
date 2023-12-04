

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">
      <a href="{{ route('dashboard') }}" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="{{ asset('assets/images/logo-icon.png')}}" alt="" width="45px" height="45px" srcset="">
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Gryphus</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Tableau de bord</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">La Boutique</span>
      </li>

      <li class="menu-item">
        <a href="{{ route('banner.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-image"></i>
          <div data-i18n="Boxicons">Bannières</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('category.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-category-alt"></i>
          <div data-i18n="Boxicons">Catégories de Produits</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-component"></i>
          <div data-i18n="Products">Produits</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('product.create') }}" class="menu-link">
              <div data-i18n="Product">Ajouter un produit</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('product.index') }}" class="menu-link">
              <div data-i18n="Product">Tous les produits</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <!-- {{ route('shipping.index') }} -->
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-truck"></i>
          <div data-i18n="Boxicons">Expéditions</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('order.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-bar-chart-alt"></i>
          <div data-i18n="Boxicons">Commandes</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('product.reviews.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-bookmarks"></i>
          <div data-i18n="Boxicons">Avis Produits</div>
        </a>
      </li>

      <!-- Blog -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Le Blog</span></li>
      <!-- Categories -->
      <li class="menu-item">
        <a href="{{ route('post-category.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-left-indent"></i>
          <div data-i18n="Boxicons">Categories</div>
        </a>
      </li>

      <!-- Posts -->
      <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-align-left"></i>
          <div data-i18n="Extended UI">Articles de Blog</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('post.index') }}" class="menu-link">
              <div data-i18n="Perfect Scrollbar">Tous les articles</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('post.create') }}" class="menu-link">
              <div data-i18n="Text Divider">Ecrire un article</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="{{ route('tag.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-purchase-tag"></i>
          <div data-i18n="Boxicons">Tags</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-chat"></i>
          <div data-i18n="Boxicons">Commentaires</div>
        </a>
      </li>

      <!-- Forms & Tables -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Paramètres Généraux</span></li>
      <!-- Coupons -->
      <li class="menu-item">
        <a href="{{ route('coupon.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-coupon"></i>
          <div data-i18n="Boxicons">Coupons</div>
        </a>
      </li>

      <!-- Coupons -->
      <li class="menu-item">
        <a href="{{ route('users.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user"></i>
          <div data-i18n="Boxicons">Utilisateurs</div>
        </a>
      </li>

      <!-- Tables -->
      <li class="menu-item">
        <a href="{{ route('settings.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div data-i18n="Tables">Paramètres</div>
        </a>
      </li>

      <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
      <li class="menu-item">
        <a
          href="https://visibility242.com/"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">Support</div>
        </a>
      </li>
      <li class="menu-item">
        <a
          href="https://visibility242.com/"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Documentation">Documentation</div>
        </a>
      </li>
    </ul>
  </aside>
