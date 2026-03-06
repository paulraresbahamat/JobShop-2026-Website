@php
    $companies = [
        1  => ['name' => '.msg', 'description' => __('jobs.msg'), 'address' => 'msg systems croitorilor, Cluj-Napoca'],
        2  => ['name' => 'Automatify', 'description' => __('jobs.auto'), 'address' => 'Automatify IT Henri Barbusse, Cluj-Napoca'],
        3  => ['name' => 'Holcim', 'description' => __('jobs.holcim'), 'address' => 'Holcim Romania Alesd'],
        4  => ['name' => 'Analog Devices', 'description' => __('jobs.analog'), 'address' => 'Analog Devices - Cluj-Napoca'],
        5  => ['name' => 'Frequentis', 'description' => __('jobs.freq'), 'address' => 'Frequentis Henri Barbusse, Cluj-Napoca'],
        6  => ['name' => 'RebelDot', 'description' => __('jobs.rd'), 'address' => 'RebelDot Strada Buftea, Cluj-Napoca'],
        7  => ['name' => 'Uncountable', 'description' => __('jobs.unc'), 'address' => 'Uncountable Brannan Street, San Francisco'],
        8  => ['name' => 'BMW TechWorks', 'description' => __('jobs.nodesc'), 'address' => 'BMW TechWorks Romania Strada Ploiesti, Cluj-Napoca'],
        9  => ['name' => 'Serviciul de Telecomunicații Speciale', 'description' => __('jobs.sts'), 'address' => 'Serviciul de Telecomunicații Speciale Splaiul Independentei, Bucuresti'],
        10 => ['name' => 'Life Is Hard', 'description' => __('jobs.lih'), 'address' => 'Life is Hard - Floresti'],
        11 => ['name' => 'See US Work and Travel', 'description' => __('jobs.seeus'), 'address' => 'See us work and travel Calea Motilor, Cluj-Napoca'],
    ];
@endphp

<section class="jobs-section">
    <div class="jobs-container">
        <h1 class="jobs-title">{!! __('jobs.title') !!}<img src="images/shapes/triangle-blue.png" alt="" class="title-icon"></h1>
        
        <div class="companies-grid">
            <div class="company-item" data-company="1">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/3.svg') }}" alt=".msg">
                </div>
            </div>

            <div class="company-item" data-company="2">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/5.png') }}" alt="Automatify">
                </div>
            </div>

            <div class="company-item" data-company="3">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/6.png') }}" alt="Holcim">
                </div>
            </div>

            <div class="company-item" data-company="4">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/2.png') }}" alt="Analog Devices">
                </div>
            </div>

            <div class="company-item" data-company="5">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/1.png') }}" alt="Frequentis">
                </div>
            </div>

            <div class="company-item" data-company="6">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/4.png') }}" alt="RebelDot">
                </div>
            </div>

            <div class="company-item" data-company="7">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/7.png') }}" alt="Uncountable">
                </div>
            </div>

            <div class="company-item" data-company="8">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/11.png') }}" alt="BMW">
                </div>
            </div>

            <div class="company-item" data-company="9">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/9.png') }}" alt="STS">
                </div>
            </div>

            <div class="company-item" data-company="10">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/10.png') }}" alt="">
                </div>
            </div>

            <div class="company-item" data-company="11">
                <div class="company-logo">
                    <img src="{{ asset('images/marquee-logos/8.png') }}" alt="See US">
                </div>
            </div>
        </div>
        <h2 class="sponsors-title">{!! __('jobs.spon') !!}</h2>
        <div class="sponsors-grid">
            <div class="sponsor-item">
                <div class="sponsor-logo">
                    <img src="{{ asset('images/marquee-logos/12.png') }}" alt="Olivo Coffee Culture">
                </div>
            </div>

            <div class="sponsor-item">
                <div class="sponsor-logo">
                    <img src="{{ asset('images/marquee-logos/13.png') }}" alt="Lunchbox">
                </div>
            </div>

            <div class="sponsor-item">
                <div class="sponsor-logo">
                    <img src="{{ asset('images/marquee-logos/14.png') }}" alt="Alikof">
                </div>
            </div>

            <div class="sponsor-item">
                <div class="sponsor-logo">
                    <img src="{{ asset('images/marquee-logos/15.svg') }}" alt="Popeyes">
                </div>
            </div>

            <div class="sponsor-item">
                <div class="sponsor-logo">
                    <img src="{{ asset('images/marquee-logos/16.png') }}" alt="Indigo">
                </div>
            </div>

            <div class="sponsor-item">
                <div class="sponsor-logo">
                    <img src="{{ asset('images/marquee-logos/17.png') }}" alt="Digital Romania">
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="companyModal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <div class="modal-body">
                <h2 class="modal-title" id="modalTitle">Company Name</h2>
                <p class="modal-description" id="modalDescription">Company description goes here.</p>

                <a href="#" target="_blank" id="modalMapLink" class="modal-map-link" style="display: none;">
                    <div class="modal-map-container">
                        <iframe id="modalMap" width="100%" height="250" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .modal-map-link {
        display: block;
        margin-top: 24px;
        text-decoration: none;
        border-radius: 12px;
        overflow: hidden;
        border: 2px solid #e5e5e5;
        transition: border-color 0.3s ease;
        position: relative;
    }

    .modal-map-link:hover {
        border-color: #0125DC;
    }

    .modal-map-container {
        width: 100%;
        height: 250px;
        pointer-events: none;
    }

    .modal-map-link::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: transparent;
        z-index: 10;
        cursor: pointer;
    }

    .blue-text{
        color: #0125DC;
    }

    .orange-text{
        color: #FF4D20;
    }

    .jobs-section {
        padding: 20px 20px 80px;
        background: #ffffff;
        position: relative;
        z-index: 1;
    }

    .jobs-section::before {
        content: "";
        position: absolute;
        top: 50%;
        transform: translateY(-75%);
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('images/grid-team-1.svg');
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .jobs-section::after {
        content: "";
        position: absolute;
        top: 30%;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('images/grid-team-1.svg');
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .jobs-container {
        max-width: 1400px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .jobs-title {
        font-family: 'Inter', sans-serif;
        font-size: 36px;
        font-weight: 500;
        color: #000000;
        margin: 25px 0 60px 0;
        text-align: center;
        position: relative;
        width: 100%;
    }

    .jobs-title .title-icon {
        width: 130px;
        height: 130px;
        position: absolute;
        right: calc(50% - 300px);
        top: 50%;
        transform: translateY(-30%);
    }

    .companies-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        width: 100%;
        max-width: 1200px;
        justify-content: center;
    }

    .company-item {
        background: #ffffff;
        border: 2px solid #e5e5e5;
        border-radius: 20px;
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        max-width: 250px;
    }

    .company-item:hover {
        border-color: #0125DC;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(1, 37, 220, 0.1);
    }

    .company-logo {
        width: 80%;
        height: 80%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .company-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    /* Modal */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        animation: fadeIn 0.3s ease;
    }

    .modal.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sponsors-title {
        font-family: 'Inter', sans-serif;
        font-size: 28px;
        font-weight: 500;
        color: #000;
        margin: 70px 0 30px 0;
        text-align: center;
    }

    .sponsors-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        width: 100%;
        max-width: 900px;
        justify-content: center;
    }

    .sponsor-item {
        background: #ffffff;
        border: 2px solid #e5e5e5;
        border-radius: 20px;
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 120px;
    }

    .sponsor-logo {
        width: 70%;
        height: 70%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sponsor-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            transform: translate(-50%, -40%);
        }
        to {
            transform: translate(-50%, -50%);
        }
    }

    .modal-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(4px);
        animation: fadeIn 0.6s ease;
    }

    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #ffffff;
        border-radius: 24px;
        width: 90%;
        max-width: 700px;
        max-height: 80vh;
        overflow-y: auto;
        padding: 50px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: slideUp 0.4s ease;
    }

    .modal-content::-webkit-scrollbar {
        width: 12px;
    }

    .modal-content::-webkit-scrollbar-track {
        background: transparent;
        margin: 22px 0;
    }

    .modal-content::-webkit-scrollbar-thumb {
        background: #0125DC;
        border-radius: 10px;
        border: 3px solid #ffffff;
    }

    .modal-content::-webkit-scrollbar-thumb:hover {
        background: #0119b8;
    }

    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 32px;
        height: 32px;
        background: transparent;
        border: none;
        font-size: 26px;
        color: #999;
        cursor: pointer;
        padding: 0;
        display: grid;
        place-items: center;
        transition: color 0.2s ease;
    }

    .modal-close:hover {
        color: #333;
    }

    .modal-title {
        font-family: 'Inter', sans-serif;
        font-size: 36px;
        font-weight: 700;
        color: #000000;
        margin: 0 0 24px 0;
        padding-right: 40px;
    }

    .modal-description {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.7;
        color: #4a4a4a;
        margin: 0;
    }

    @media (max-width: 768px) {
        .jobs-section::before {
            display: block;
            top: 80px;
            height: 300px;
            background-size: cover;
        }

        .jobs-section::after {
            display: none;
        }

        .jobs-title .title-icon {
            display: none;
        }

        .jobs-title {
            font-size: 36px;
        }

        .companies-grid {
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
        }

        .modal-content {
            padding: 30px;
        }

        .modal-title {
            font-size: 24px;
        }

        .modal-description {
            font-size: 15px;
        }
    }
</style>

<script>
    const companyData = @json($companies);
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('companyModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalDescription = document.getElementById('modalDescription');
        const modalClose = document.querySelector('.modal-close');
        const modalOverlay = document.querySelector('.modal-overlay');
        const companyItems = document.querySelectorAll('.company-item');

        // Map Elements
        const modalMapLink = document.getElementById('modalMapLink');
        const modalMap = document.getElementById('modalMap');

        // Open modal
        companyItems.forEach(item => {
            item.addEventListener('click', () => {
                const companyId = item.dataset.company;
                const company = companyData[companyId];
                
                modalTitle.textContent = company.name;
                modalDescription.innerHTML = company.description;

                // Map logic
                if (company.address) {
                    const encodedAddress = encodeURIComponent(company.address);
                    
                    // iframe embed link
                    modalMap.src = `https://maps.google.com/maps?q=${encodedAddress}&t=&z=15&ie=UTF8&iwloc=&output=embed`;
                    
                    // Direct Google Maps redirect link
                    modalMapLink.href = `https://www.google.com/maps/search/?api=1&query=${encodedAddress}`;
                    modalMapLink.style.display = 'block';
                } else {
                    // Hide map if no address exists for the company
                    modalMapLink.style.display = 'none';
                    modalMap.src = '';
                }

                modal.classList.add('active');
            });
        });

        // Close modal
        const closeModal = () => {
            modal.classList.remove('active');

            // clear iframe to reduce load on the page
            setTimeout(() => { modalMap.src = ''; }, 300);
        };

        modalClose.addEventListener('click', closeModal);
        modalOverlay.addEventListener('click', closeModal);
    });
</script>