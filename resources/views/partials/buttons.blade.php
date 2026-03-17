<div class="card activity-card p-3 mb-3">
    <h5>Quick Actions</h5>
    <div class="row">
        <div class="col-md-3 mb-2">
            <a class="btn btn-success w-100 quick-btn" href="{{ url('profileupdate') }}">
                Update Profile
            </a>
        </div>
        <div class="col-md-3 mb-2">
            <a class="btn btn-primary w-100 quick-btn" href="{{ url('postachievement') }}">
                Post Achievement
            </a>
        </div>
        <div class="col-md-3 mb-2">
            <a class="btn btn-info w-100 quick-btn" href="{{ url('myfeed') }}">
                Post Feed
            </a>
        </div>
        <div class="col-md-3 mb-2">
            <button type="button" class="btn btn-warning w-100 quick-btn" data-bs-toggle="modal" data-bs-target="#donate">
                Donate
            </button>
        </div>
    </div>
</div>
<div class="modal fade" id="donate" tabindex="-1" aria-labelledby="donateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="donateLabel">Donate</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card activity-card p-3">
                <h5>Make a Donation</h5>
                <form method="POST" action="/donate">@csrf
                    <div class="mb-3">
                        <label class="fw-bold mb-2">Select Amount</label>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="500">₹500</button>
                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="1000">₹1000</button>
                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="2000">₹2000</button>
                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="5000">₹5000</button>
                            <button type="button" class="btn btn-outline-success amount-btn" data-amount="10000">₹10000</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Donation Amount</label>
                        <input type="number" name="amount" id="donationAmount" class="form-control" placeholder="Enter amount" required>
                    </div>
                <!-- Comment -->
                    <div class="mb-3">
                        <label>Comment / Remark</label>
                        <textarea name="remark" class="form-control"rows="3"placeholder="Write a message (optional)"></textarea>
                    </div>
                    <button class="btn btn-success w-100">Donate Now</button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.amount-btn').forEach(btn => {
        btn.addEventListener('click', function(){
            let amount = this.getAttribute('data-amount');
            document.getElementById('donationAmount').value = amount;
        });
    });
</script>