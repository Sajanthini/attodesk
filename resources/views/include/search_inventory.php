<!-- ---------------------------- -->
<!-- Modal Window Vehicle Analyse -->
<!-- ---------------------------- -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Analyse Vehicle</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="form-group col-md-6 pb-3">
                            <label for="min_price">Min Price</label>
                            <select class="form-select mt-2" name="min_price" id="min_price">
                                <option value="$5000">$5000</option>
                                <option value="$6000">$6000</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 pb-3">
                            <label for="max_price">Max Price</label>
                            <select class="form-select mt-2" name="max_price" id="max_price">
                                <option value="$5000">$5000</option>
                                <option value="$6000">$6000</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 pb-3">
                            <label for="from_year">From Year</label>
                            <select class="form-select mt-2" name="from_year" id="from_year">
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 pb-3">
                            <label for="to_year">To Year</label>
                            <select class="form-select mt-2" name="to_year" id="to_year">
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 pb-3">
                            <label for="start_km">Start KM</label>
                            <select class="form-select mt-2" name="start_km" id="start_km">
                                <option value="25000">25000 KM</option>
                                <option value="35000">35000 KM</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 pb-3">
                            <label for="to_year">End KM</label>
                            <select class="form-select mt-2" name="to_year" id="to_year">
                                <option value="25000">25000 KM</option>
                                <option value="35000">35000 KM</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 pb-3">
                            <label for="vehicle_make">Make</label>
                            <select class="form-select mt-2" name="vehicle_make" id="vehicle_make">
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
            </div>
        </div>
    </div>
</div>

<!-- ---------------------------------------- -->
<!-- Modal Window Vehicle Analyse Result List -->
<!-- ---------------------------------------- -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Results from Inventory</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Vehicle Analyse Result
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
            </div>
        </div>
    </div>
</div>