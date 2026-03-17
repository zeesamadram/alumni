
<div class="row">
    <div class="col-md-3 mb-3">
        <div class="stat-card stat-green d-flex justify-content-between align-items-center">
            <div>
                <h4>{{count(\App\Models\User::all())}}</h4>
                Total Alumni
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card stat-blue d-flex justify-content-between align-items-center">
            <div>
                <h4>18</h4>
                Upcoming Events
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card stat-orange d-flex justify-content-between align-items-center">   
            <div>
                <h4>{{\App\Models\Donation::sum('amount')}}</h4>
                Donations
            </div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#donations"><i class="bi bi-arrows-angle-expand fs-4"></i></a>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stat-card stat-purple d-flex justify-content-between align-items-center">
            <div>
                <h4>96</h4>
                Achievements
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="donations" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"  style="background:linear-gradient(135deg,yellow,orange);">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Donation Perks</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <H3>These are donation perks</H3>
        <ol>
            <li>Donate 500 : Post Update</li>
            <li>Donate 1000: Profile Update Once</li>
            <li>Donate 3000: Profile Update 5 Times</li>
            <li>Donate 5000: Profile Update unlimited</li>
            <li>Donate 10000: Photo/Image Upload</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>