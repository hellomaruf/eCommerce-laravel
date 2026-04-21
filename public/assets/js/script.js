const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        if (mobileMenu.classList.contains('open')) {
            mobileMenu.style.transform = 'translateX(0)';
            mobileMenu.style.display = 'block';
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.style.transform = '';
            mobileMenu.style.display = '';
            document.body.style.overflow = '';
        }
    });
    document.addEventListener('click', e => {
        if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
            mobileMenu.style.transform = '';
            mobileMenu.style.display = '';
            document.body.style.overflow = '';
        }
    });
}

const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');

if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('max-md:block');
        if (sidebar.classList.contains('max-md:block')) {
            sidebar.classList.remove('max-md:hidden');
            sidebar.classList.add('max-md:block');
            sidebar.classList.add('mb-4');
        } else {
            sidebar.classList.add('max-md:hidden');
            sidebar.classList.remove('max-md:block');
            sidebar.classList.remove('mb-4');
        }
    });
}

document.querySelectorAll('.page-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.page-btn').forEach(b => {
            b.classList.remove('bg-[#111]', 'text-white', 'border-[#111]');
            b.classList.add('bg-white', 'text-[#777]', 'border-[#e8e8e8]');
        });
        this.classList.remove('bg-white', 'text-[#777]', 'border-[#e8e8e8]');
        this.classList.add('bg-[#111]', 'text-white', 'border-[#111]');
    });
});

document.querySelectorAll('.cat-item').forEach(item => {
    item.addEventListener('click', function () {
        document.querySelectorAll('.cat-item').forEach(i => {
            i.classList.remove('bg-[#f3f3f3]');
        });
        this.classList.add('bg-[#f3f3f3]');
    });
});

document.querySelectorAll('.btn-cart').forEach(btn => {
    btn.addEventListener('click', function () {
        const orig = this.textContent;
        this.textContent = '✓ Added';
        this.classList.add('!bg-green-50', '!border-green-300', '!text-green-600');
        setTimeout(() => {
            this.textContent = orig;
            this.classList.remove('!bg-green-50', '!border-green-300', '!text-green-600');
        }, 1400);
    });
});