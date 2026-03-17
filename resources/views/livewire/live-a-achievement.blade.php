<div>
    <div class="col-md-12">
        <div class="card activity-card p-3 mb-3">

            <div class="row">
                <div class="col-md-4 mb-2">
                    <button class="btn btn-success w-100 quick-btn"
                        data-bs-toggle="collapse"
                        data-bs-target="#achievementPanel">
                        Achievements
                    </button>
                </div>

                <div class="col-md-4 mb-2">
                    <button class="btn btn-primary w-100 quick-btn"
                        data-bs-toggle="collapse"
                        data-bs-target="#publicationPanel">
                        Publications
                    </button>
                </div>

                <div class="col-md-4 mb-2">
                    <button class="btn btn-warning w-100 quick-btn"
                        data-bs-toggle="collapse"
                        data-bs-target="#donationPanel">
                        Book/Chapter
                    </button>
                </div>
            </div>

            <!-- Parent accordion container -->
            <div id="activityAccordion">

                <div class="collapse mt-3"
                    id="achievementPanel"
                    data-bs-parent="#activityAccordion">
                    <div class="card card-body">
                        <h6>Add Achievement</h6>
                        <input type="text" class="form-control mb-2" placeholder="Achievement title">
                        <textarea class="form-control mb-2" placeholder="Description"></textarea>
                        <button class="btn btn-success">Post Achievement</button>
                        <hr>
                        <h6>Achievements Posted</h6>
                    </div>
                </div>

                <div class="collapse mt-3"
                    id="publicationPanel"
                    data-bs-parent="#activityAccordion">
                    <div class="card card-body">
                        <h6>Add Publication</h6>
                        <input type="text" class="form-control mb-2" placeholder="Publication title">
                        <input type="text" class="form-control mb-2" placeholder="Year of Publication">
                        <input type="text" class="form-control mb-2" placeholder="Journal / Conference">
                        <input type="text" class="form-control mb-2" placeholder="Journal Rating (if any)">
                        <button class="btn btn-primary">Submit Publication</button>
                        <hr>
                        <h6>Publications Posted</h6>
                    </div>
                </div>

                <div class="collapse mt-3"
                    id="donationPanel"
                    data-bs-parent="#activityAccordion">
                    <div class="card card-body">
                        <h6>Book/Chapter Publication</h6>
                        <input type="text" class="form-control mb-2" placeholder="Book Title">
                        <input type="text" class="form-control mb-2" placeholder="Publisher">
                        <input type="text" class="form-control mb-2" placeholder="Author(s)">
                        <input type="text" class="form-control mb-2" placeholder="Editor(s)">
                        <input type="text" class="form-control mb-2" placeholder="Year of Publication">
                        <button class="btn btn-warning">Submit</button>
                        <hr>
                        <h6>Book/Chapter Posted</h6>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
