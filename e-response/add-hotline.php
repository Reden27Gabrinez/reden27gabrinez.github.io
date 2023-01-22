<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Add Responders</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="new-user-info">
                    <form method="POST" action="class.php">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="fname">Responder:</label>
                                <input type="text" class="form-control" id="responder" name="responder" placeholder="Responder">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="lname">Mobile Number:</label>
                                <input type="number" class="form-control" id="number" name="number" placeholder="Mobile Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="add1">Latitude:</label>
                                <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="add2">Longitude:</label>
                                <input type="text" class="form-control" id="long" name="long" placeholder="Longitude">
                            </div>
                        </div>
                        <hr>
                        <button type="submit" name="add" class="btn btn-primary">Add Responder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>