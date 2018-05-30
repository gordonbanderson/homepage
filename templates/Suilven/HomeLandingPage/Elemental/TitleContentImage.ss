<!--  about -->
<div id="about" class="about-main-block mrg-btm">
    <div class="container">
        <% if $Title %>
        <div class="section">
            <h3 class="section-heading">About <span>Neighborhood Publications</span></h3>
        </div>
        <% end_if %>
        <div class="row">
            <div class="offset-xs-1 col-sm-7 col-md-5">
                <div class="about-block">
                    <h2 class="middle-heading">$SubTitle</h2>
                    $Content
                </div>
                <div class="about-facts">
                    <div class="row">
                        <div class="col-xs-4 col-md-5">
                            <h2 class="counter">318</h2>
                            <p>Clients</p>
                        </div>
                        <div class="col-xs-4 col-md-5">
                            <h2 class="counter">4021</h2>
                            <p>Members</p>
                        </div>
                        <div class="col-xs-2 col-md-2">
                            <h2 class="counter">28</h2>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-md-2 col-sm-4 col-md-4">
                <div class="about-dtl-img img-top">
                    <img src="$Image.FocusFill(370, 514).URL" class="img-responsive" alt="about">
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end about -->
