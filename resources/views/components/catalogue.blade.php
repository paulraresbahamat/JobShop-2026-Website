<section class="catalogue-section">
    <div class="container">
        <h2 class="catalogue-title">
            {!! __('catalogue.soon') !!}
            <img src="images/shapes/triangle-orange.png" alt="" class="title-icon">
        </h2>
    </div>
</section>

<style>

.orange-text{
    color: #FF4D20;
}

.catalogue-section{
    padding: 120px 0;  
    min-height: 70vh;  
    display: flex;
    align-items: center; 
    justify-content: center;
}

.catalogue-title {
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 36px;
        font-weight: 500;
        font-style: medium;
        margin-bottom: 60px;
}

.title-icon {
        width: 130px;
        height: 130px;
        position: absolute;
        left: calc(50% + 400px);
        top: 50%;
        transform: translateY(-30%);
}

@media (max-width: 768px) {
        .title-icon {
            display: none;
        }
    }
</style>    