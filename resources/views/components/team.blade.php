<section class="team-section">
    <div class="container">
        <h2 class="team-title">{!! __('team.team') !!}<img src="images/shapes/triangle-team.png" alt="" class="title-icon"></h2>
        <div class="team-grid">
            @php
                $members = [
                    ['name' => 'Dragoș Rotea', 'role' => __('team.project_coordinator'), 'linkedin' => 'https://www.linkedin.com/in/dragos-rotea-8aaaa1366?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app', 'photo' => 'images/team/Dragos.PNG'],
                    ['name' => 'Ioan-Alexandru Petringel', 'role' => __('team.hr_responsible'), 'linkedin' => 'https://www.linkedin.com/in/alex-petringel/', 'photo' => 'images/team/Alex.PNG'],
                    ['name' => 'Anca-Ștefania Cuibar', 'role' => __('team.fundraising_responsible'), 'linkedin' => 'https://www.linkedin.com/in/cuibar-anca-472aa1359?utm_source=share_via&utm_content=profile&utm_medium=member_android', 'photo' => 'images/team/Anca.PNG'],
                    ['name' => 'Larisa Radu', 'role' => __('team.corporate_relations'), 'linkedin' => 'https://www.linkedin.com/in/larisa-radu-2a0b38371?utm_source=share_via&utm_content=profile&utm_medium=member_android', 'photo' => 'images/team/Larisa Radu.PNG'],
                    ['name' => 'Andreea-Octavia-Patricia<br>Szegedi-Hozai', 'role' => __('team.pr_responsible'), 'linkedin' => 'https://www.linkedin.com/in/andreea-octavia-patricia-szegedi-hozai-8bba743a7?utm_source=share_via&utm_content=profile&utm_medium=member_ios', 'photo' => 'images/team/Patri.PNG'],
                    ['name' => 'Claudia-Teodora Chira', 'role' => __('team.media_responsible'), 'linkedin' => 'https://www.linkedin.com/in/claudia-teodora-chira-6ab8a5388?utm_source=share_via&utm_content=profile&utm_medium=member_ios', 'photo' => 'images/team/Jazz.PNG'],
                    ['name' => 'Paul-Rareș Bahamat', 'role' => __('team.it_responsible'), 'linkedin' => 'https://www.linkedin.com/in/paul-rare%C8%99-bahamat-0a37733a0/', 'photo' => 'images/team/Rares.jpeg'],
                    ['name' => 'Luiza-Maria Furdui', 'role' => __('team.design_responsible'), 'linkedin' => 'https://www.linkedin.com/in/furdui-luiza/', 'photo' => 'images/team/Luiza.PNG'],
                    ['name' => 'Matei Șandor', 'role' => __('team.junior_designer'), 'linkedin' => 'https://www.linkedin.com/in/matei-sandor-a713933b0?utm_source=share_via&utm_content=profile&utm_medium=member_ios', 'photo' => 'images/team/Matei.PNG'],
                    ['name' => 'Sara Ioana Drăgănuță', 'role' => __('team.hts_coordinator'), 'linkedin' => 'https://www.linkedin.com/in/sara-draganuta-3ab723350/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app', 'photo' => 'images/team/Sara.PNG'],
                    ['name' => 'Andrea Larisa Marița', 'role' => __('team.hts_design'), 'linkedin' => 'https://www.linkedin.com/in/larisa-radu-2a0b38371?utm_source=share_via&utm_content=profile&utm_medium=member_android', 'photo' => 'images/team/Larisa Marita.PNG'],
                    ['name' => 'Alesia Breban', 'role' => __('team.hts_pr'), 'linkedin' => 'https://www.linkedin.com/in/alesia-breban-a279213b0?utm_source=share_via&utm_content=profile&utm_medium=member_ios', 'photo' => 'images/team/Ale.PNG'],
                    ['name' => 'Vlad-Costin Iftimie', 'role' => __('team.logistics_responsible'), 'linkedin' => 'https://www.linkedin.com/in/vlad-iftimie-905241251?utm_source=share_via&utm_content=profile&utm_medium=member_ios', 'photo' => 'images/team/Vlad.PNG'],
                ];
            @endphp

            @foreach($members as $member)
                <div class="member-row">
                    <div class="photo-frame">
                        <div class="inner-frame">
                            <img src="{{ asset($member['photo']) }}" alt="{{ $member['name'] }}">
                        </div>
                    </div>

                    <div class="member-details">
                        <h3>{!! $member['name'] !!}</h3>
                        <p class="role">{{ $member['role'] }}</p>
                        @if($member['linkedin'])
                            <a href="{{ $member['linkedin'] }}" 
                            target="_blank" 
                            class="linkedin-text" 
                            rel="noopener noreferrer">
                                LinkedIn
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .container {
        margin: 0 auto;
        padding: 0 15px;
        max-width: 600px;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .team-section {
        padding: 80px 0;
        background-color: #fff;
        font-family: 'Inter', sans-serif;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    .team-title {
        font-family: 'Inter', sans-serif;
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 36px;
        font-weight: 500;
        margin-bottom: 60px;
    }
    
    .title-icon {
        width: 130px;
        height: 130px;
        position: absolute;
        left: calc(50% + 150px);
        top: 50%;
        transform: translateY(-30%);
    }

    .blue-text { 
        color: #0125DC; 
    }

    .team-grid {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }

    .member-row {
        display: flex;
        align-items: center;
        width: 100%;
        max-width: 500px;
        gap: 20px;
    }

    .photo-frame {
        flex-shrink: 0;
        width: 150px;
        height: 175px;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        padding: 6px;
        background: #fff;
        box-shadow: 0 4px 6px rgba(0,0,0,0.02);
        overflow: hidden; /* ensures nothing leaks outside */
    }

    .inner-frame {
        width: 100%;
        height: 100%;
        background-color: #fcfcfc;
        border-radius: 8px;
        overflow: hidden; 
    }

    .inner-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .member-details h3 {
        margin: 0;
        font-size: 20px;
        font-weight: 600;
        color: #000000;
    }

    .member-details .role {
        margin: 2px 0;
        font-size: 14px;
        color: #777777;
        font-weight: 600;
    }

    .member-details {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .team-section::before {
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

    .team-section::after {
        content: ""; 
        position: absolute;
        
        top: 30%;
        
        left: 0;
        width: 100%;  
        height: 100%;
        
        background-image: url('images/grid-team-2.svg');
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;          
    }

    .linkedin-text {
        display: inline-block;
        margin-top: 5px;
        font-size: 13px;
        color: #999999; 
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s ease;
    }

    .linkedin-text:hover {
        color: #0125DC; 
        text-decoration: underline;
    }

    @media (min-width: 1024px) {

        .member-row {
            max-width: 750px;
            gap: 35px;
        }

        .photo-frame {
            width: 200px;
            height: 240px;
        }

        .member-details h3 {
            font-size: 26px;
        }

        .member-details .role {
            font-size: 18px;
        }

        .linkedin-text {
            font-size: 16px;
        }

    }

    @media (max-width: 768px) {
        .title-icon {
            display: none;
        }

        .team-title {
            margin-top: -45px;
        }
    }
</style>

