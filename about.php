<div class="col-12">
    <div class="row my-5 ">
        <div class="col-md-5">


        <div id="accordianId" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="section1HeaderId">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true" aria-controls="section1ContentId">
                  Section 1
                </a>
                    </h5>
                </div>
                <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                    <div class="card-body">
                        Section 1 content
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="section2HeaderId">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="true" aria-controls="section2ContentId">
                  Section 2
                </a>
                    </h5>
                </div>
                <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                    <div class="card-body">
                        Section 2 content
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="col-md-7">
            <div class="card rounded-0 card-outline card-navy shadow" >
                <div class="card-body rounded-0">
                    <h2 class="text-center">About</h2>
                    <center><hr class="bg-navy border-navy w-25 border-2"></center>
                    <div>
                        <?= file_get_contents("about_us.html") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>