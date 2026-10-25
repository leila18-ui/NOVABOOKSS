<script src="https://unpkg.com"></script>
<header class="partie1">
    <div class="brand">
        <h2><a href="index.php">NovaBooks</a></h2>
        <h5>Des histoires qui restent</h5>
    </div>

    <nav>
        <ul>
        <li class="<?= $page_active === 'connexion' ? 'active' : '' ?>">
                <a href="inscription.php" title="Se connecter" class="icon-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user preview-icon"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </a>
            </li>
            <li class="<?= $page_active === 'about' ? 'active' : '' ?>">
            <a href="about.php">À propos</a>
            </li>
            <li class="<?= $page_active === 'products' ? 'active' : '' ?>">
                <a href="products.php">Catalogue</a>
            </li>
            <li class="<?= $page_active === 'checkout' ? 'active' : '' ?>">
                <a href="checkout.php">Checkout</a>
            </li>
            <li class="panier">
                <a href="cart.php">🛒<span id="icon-panier"></span></a>
            </li>
        </ul>
    </nav>
</header>

