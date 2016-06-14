<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <a href="http://neocodis.com" target="_blank">
            <img src="/img/layout/logo.png" class="img-responsive logo"/>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="languages">
                <a class="lang <?php if($element['Helper']['lang']=='pl'){ echo ' lang_active ';} ?>" href="/{{ $element['Helper']['site'] }}/pl">PL</a>
                <div class="languages_hr"></div>
                <a class="lang <?php if($element['Helper']['lang']=='en'){ echo ' lang_active ';} ?>" href="/{{ $element['Helper']['site'] }}/en">EN</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="left_h3">
                <?php if($element['Helper']['lang']=='pl'){ echo'Projekty'; }else{ echo'Case Studies'; } ?>
            </h3>
            <ul class="list_projects">
                <li><a class="list_site <?php if($element['Helper']['site']=='tropical'){ echo ' list_site_active ';} ?>" href="/tropical/{{ $element['Helper']['lang'] }}">Tropical</a></li>
                <li><a class="list_site <?php if($element['Helper']['site']=='zss6'){ echo ' list_site_active ';} ?>" href="/zss6/{{ $element['Helper']['lang'] }}">ZSS6</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="left_h3">
                <?php if($element['Helper']['lang']=='pl'){ echo'Inne'; }else{ echo'Others'; } ?>
            </h3>
            <ul class="list_other_projects">
                <li><a class="list_site " href="http://neocodis.com" target="_blank">Neocodis.com</a></li>
            </ul>
        </div>
    </div>
</div>
