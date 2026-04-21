// ── Hamburger menu ──
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
    });
    document.addEventListener('click', e => {
        if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
            document.body.style.overflow = '';
        }
    });
}

// ── Mobile sidebar toggle ──
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');

function checkMobile() {
    if (window.innerWidth <= 768) {
        if (sidebarToggle) sidebarToggle.style.display = 'flex';
        const productsArea = document.querySelector('.products-area');
        const mainWrapper = document.querySelector('.main-wrapper');
        if (sidebarToggle && sidebar && sidebarToggle.parentNode !== mainWrapper) {
            mainWrapper.insertBefore(sidebarToggle, sidebar);
        }
    } else {
        if (sidebarToggle) sidebarToggle.style.display = 'none';
        if (sidebar) sidebar.classList.remove('mobile-open');
    }
}
checkMobile();
window.addEventListener('resize', checkMobile);

if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('mobile-open');
        const svg = sidebarToggle.querySelector('svg:last-child');
        svg.style.transform = sidebar.classList.contains('mobile-open') ? 'rotate(180deg)' : '';
    });
}

// ── Pagination ──
document.querySelectorAll('.page-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});

// ── Category filter ──
document.querySelectorAll('.cat-item').forEach(item => {
    item.addEventListener('click', function () {
        document.querySelectorAll('.cat-item').forEach(i => i.style.background = '');
        this.style.background = 'var(--gray-100)';
    });
});

// ── Add to cart ──
document.querySelectorAll('.btn-cart').forEach(btn => {
    btn.addEventListener('click', function () {
        const orig = this.textContent;
        this.textContent = '✓ Added';
        this.style.background = '#f0fdf4';
        this.style.borderColor = '#86efac';
        this.style.color = '#16a34a';
        setTimeout(() => {
            this.textContent = orig;
            this.style.background = '';
            this.style.borderColor = '';
            this.style.color = '';
        }, 1400);
    });
});
