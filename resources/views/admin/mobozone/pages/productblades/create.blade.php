@extends('admin.layoutsMain.adminappaddproduct')

@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <form method="POST" id="addproductfrom">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Add Product</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Add Product</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xxl-4">
                                            <h5 class="card-title mb-3">Product Information</h5>
                                            <p class="text-muted">Product Information refers to any information held by an
                                                organisation about the products it produces, buys, sells or distributes.</p>
                                        </div>
                                        <div class="col-xxl-8">
                                            <div class="mb-3">
                                                <label for="productTitle" class="form-label">Product Title</label>
                                                <input value="{{ (!empty($getproduct->name)) ? $getproduct->name: '' }}" type="text" class="form-control" id="name" name="name"
                                                    placeholder="Enter product title" >
                                                    <p class="text-danger error name-error"></p>

                                            </div>





                                            <div class="mb-3">
                                                <label for="productCategories" class="form-label">Colors</label>
                                                <select class="form-control" data-choices name="color" id="color">
                                                    <option value="">Select categories</option>
                                                    <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'green') ) ? 'selected': '' }}  value="green">Green</option>
                                                    <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'black') ) ? 'selected': '' }}  value="black">Black</option>
                                                    <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'red') ) ? 'selected': '' }}  value="red">Red</option>
                                                    <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'blue') ) ? 'selected': '' }}  value="blue">Blue</option>
                                                    <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'yellow') ) ? 'selected': '' }}  value="yellow">Yellow</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="productType" class="form-label">Product Type</label>
                                                <select class="form-control" data-choices name="type" id="type">
                                                    <option  value="">Select Type</option>
                                                    <option {{ ((!empty($getproduct->type))&&($getproduct->color == 'Simple') ) ? 'selected': '' }} value="Simple">Simple</option>
                                                    <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'Classified') ) ? 'selected': '' }} value="Classified">Classified</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="shortDecs" class="form-label">Short Description</label>
                                                <textarea class="form-control" id="short_desc" name="short_desc" placeholder="Must enter minimum of a 100 characters"
                                                    rows="3">{{ (!empty($getproduct->short_desc)) ? $getproduct->short_desc: '' }}</textarea>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="productBrand" class="form-label">Brand </label>
                                                        <input value="{{ (!empty($getproduct->Brand)) ? $getproduct->Brand: '' }}" type="text" class="form-control" id="Brand"
                                                            name="Brand" placeholder="Enter brand" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="communication" class="form-label">Communication </label>
                                                        <input value="{{ (!empty($getproduct->communication)) ? $getproduct->communication: '' }}" type="text" class="form-control" id="communication"
                                                            name="communication" placeholder="Enter Communication" >
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="productBrand" class="form-label">Sell In Last 10 Hours
                                                        </label>
                                                        <input value="{{ (!empty($getproduct->sold_in_last_10_hours)) ? $getproduct->sold_in_last_10_hours: '' }}" type="number" class="form-control"
                                                            id="sold_in_last_10_hours" name="sold_in_last_10_hours"
                                                            placeholder="Enter Sell In Last 10 Hours">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="productUnit" class="form-label">Reviews</label>
                                                        <input value="{{ (!empty($getproduct->reviews)) ? $getproduct->reviews: '' }}" type="number" class="form-control" id="reviews"
                                                            name="reviews" placeholder="Enter Reviews">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="Product_Code" class="form-label">Product Code </label>
                                                        <input value="{{ (!empty($getproduct->productcode)) ? $getproduct->productcode: '' }}" type="text" class="form-control" id="productcode"
                                                            name="productcode" placeholder="Enter Product Code">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="Viewing_This_Product" class="form-label">Viewing This
                                                            Product</label>
                                                        <input value="{{ (!empty($getproduct->Viewing)) ? $getproduct->Viewing: '' }}" type="text" class="form-control" id="Viewing"
                                                            name="Viewing"
                                                            placeholder="Enter Customers Are Viewing This Product                                                            ">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="leathertype" class="form-label">Leather Type </label>
                                                        <input value="{{ (!empty($getproduct->leathertype)) ? $getproduct->leathertype: '' }}" type="text" class="form-control" id="leathertype"
                                                            name="leathertype" placeholder="Enter Leather Type">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="material" class="form-label">Material</label>
                                                        <input value="{{ (!empty($getproduct->material)) ? $getproduct->material: '' }}" type="text" class="form-control" id="material"
                                                            name="material" placeholder="Enter Material">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="active_noise_cancellation" class="form-label">Active noise cancellation </label>
                                                        <input value="{{ (!empty($getproduct->active_noise_cancellation)) ? $getproduct->active_noise_cancellation: '' }}" type="text" class="form-control" id="active_noise_cancellation"
                                                            name="active_noise_cancellation" placeholder="Enter Active noise cancellation">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="material" class="form-label">Material</label>
                                                        <input value="{{ (!empty($getproduct->material)) ? $getproduct->material: '' }}" type="text" class="form-control" id="material"
                                                            name="material" placeholder="Enter Material">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="control_the_volumes" class="form-label">Control
                                                            the volumes</label>
                                                        <select class="form-control" data-choices
                                                            name="control_the_volumes"
                                                            id="control_the_volumes">
                                                            <option {{ ((!empty($getproduct->control_the_volumes))&&($getproduct->control_the_volumes == 'yes') ) ? 'selected': '' }} value="yes">Yes</option>
                                                            <option {{ ((!empty($getproduct->control_the_volumes))&&($getproduct->control_the_volumes == 'no') ) ? 'selected': '' }} value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="Sensitivity" class="form-label">Sensitivity</label>
                                                        <input value="{{ (!empty($getproduct->sensitivity)) ? $getproduct->sensitivity: '' }}" type="text" class="form-control" id="sensitivity"
                                                            name="sensitivity" placeholder="Enter Material">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="impedance_range" class="form-label">Impedance
                                                            range</label>
                                                        <input value="{{ (!empty($getproduct->impedance_range)) ? $getproduct->impedance_range: '' }}" type="text" class="form-control" id="impedance_range"
                                                            name="impedance_range" placeholder="Enter Impedance range">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="modelnumber" class="form-label">Model Number</label>
                                                        <input value="{{ (!empty($getproduct->modelnumber)) ? $getproduct->modelnumber: '' }}" type="text" class="form-control" id="modelnumber"
                                                            name="modelnumber" placeholder="Enter Model Number">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="headphone_pad_material" class="form-label">Headphone
                                                            pad material</label>
                                                        <input value="{{ (!empty($getproduct->headphone_pad_material)) ? $getproduct->headphone_pad_material: '' }}" type="text" class="form-control"
                                                            id="headphone_pad_material" name="headphone_pad_material"
                                                            placeholder="Enter Headphone pad material">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="bluetooth_version" class="form-label">Bluetooth
                                                            version</label>
                                                        <input value="{{ (!empty($getproduct->bluetooth_version)) ? $getproduct->bluetooth_version: '' }}" type="text" class="form-control" id="bluetooth_version"
                                                            name="bluetooth_version"
                                                            placeholder="Enter Bluetooth version">
                                                    </div>
                                                </div>
                                            </div>






                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="frequency_response_range" class="form-label">Frequency
                                                            response range </label>
                                                        <input value="{{ (!empty($getproduct->frequency_response_range)) ? $getproduct->frequency_response_range: '' }}" type="text" class="form-control"
                                                            id="frequency_response_range" name="frequency_response_range"
                                                            placeholder="Enter Frequency
                                                            response range">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="total_harmonic_distortion" class="form-label">Total
                                                            Harmonic Distortion</label>
                                                        <input value="{{ (!empty($getproduct->total_harmonic_distortion)) ? $getproduct->total_harmonic_distortion: '' }}" type="text" class="form-control"
                                                            id="total_harmonic_distortion"
                                                            name="total_harmonic_distortion" placeholder="Enter Total
                                                            Harmonic Distortion">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="charging_method" class="form-label">Charging Method
                                                        </label>
                                                        <input value="{{ (!empty($getproduct->charging_method)) ? $getproduct->charging_method: '' }}" type="text" class="form-control" id="charging_method"
                                                            name="charging_method" placeholder="Enter Charging Method">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="maximum_output" class="form-label">Maximum
                                                            output</label>
                                                        <input value="{{ (!empty($getproduct->maximum_output)) ? $getproduct->maximum_output: '' }}" type="text" class="form-control" id="maximum_output"
                                                            name="maximum_output" placeholder="Enter Maximum output">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="charging_method" class="form-label">Charging Method
                                                        </label>
                                                        <input value="{{ (!empty($getproduct->charging_method)) ? $getproduct->charging_method: '' }}" type="text" class="form-control" id="charging_method"
                                                            name="charging_method" placeholder="Enter Charging Method">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="maximum_output" class="form-label">Maximum
                                                            output</label>
                                                        <input value="{{ (!empty($getproduct->maximum_output)) ? $getproduct->maximum_output: '' }}" type="text" class="form-control" id="maximum_output"
                                                            name="maximum_output" placeholder="Enter Maximum output">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="codecs" class="form-label">Codecs </label>
                                                        <input value="{{ (!empty($getproduct->codecs)) ? $getproduct->codecs: '' }}" type="text" class="form-control" id="codecs"
                                                            name="codecs" placeholder="Enter Codecs">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="resistance" class="form-label">Resistance</label>
                                                        <input value="{{ (!empty($getproduct->resistance)) ? $getproduct->resistance: '' }}" type="text" class="form-control" id="resistance"
                                                            name="resistance" placeholder="Enter Resistance">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="features" class="form-label">Features </label>
                                                        <input value="{{ (!empty($getproduct->features)) ? $getproduct->features: '' }}" type="text" class="form-control" id="features"
                                                            name="features" placeholder="Enter Features">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="point_1" class="form-label">Extra Point 1</label>
                                                        <input value="{{ (!empty($getproduct->point_1)) ? $getproduct->point_1: '' }}" type="text" class="form-control" id="point_1"
                                                            name="point_1" placeholder="Enter Extra Point">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="point_2" class="form-label">Extra Point 2 </label>
                                                        <input value="{{ (!empty($getproduct->point_2)) ? $getproduct->point_2: '' }}" type="text" class="form-control" id="point_2"
                                                            name="point_2" placeholder="Enter Extra Point ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="point_3" class="form-label">Extra Point 3</label>
                                                        <input value="{{ (!empty($getproduct->point_3)) ? $getproduct->point_3: '' }}" type="text" class="form-control" id="point_3"
                                                            name="point_3" placeholder="Enter Extra Point">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="mb-3">
                                                <label class="form-label">Tags</label>
                                                <input value="{{ (!empty($getproduct->tag)) ? $getproduct->tag: '' }}"  name="tag" id="tag" class="form-control" id="choices-text-unique-values" data-choices
                                                    data-choices-text-unique-true data-choices-removeItem type="text"
                                                    value="Fashion, Style, Brands, Puma">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-check form-switch mb-3">
                                                        <input value="{{ (!empty($getproduct->exchangeable)) ? $getproduct->exchangeable: '' }}" class="form-check-input" type="checkbox" role="switch"
                                                            id="exchangeable">
                                                        <label class="form-check-label"
                                                            for="exchangeable">Exchangeable</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-check form-switch mb-3">
                                                        <input value="{{ (!empty($getproduct->refundable)) ? $getproduct->refundable: '' }}" class="form-check-input" type="checkbox" role="switch"
                                                            id="refundable">
                                                        <label class="form-check-label"
                                                            for="refundable">Refundable</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xxl-4">
                                            <h5 class="card-title mb-3">Description</h5>
                                            <p class="text-muted">Product Information refers to any information held by an
                                                organization about the products it produces, buys, sells or distributes.</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-8">
                                            <div>
                                                <label class="form-label">Product Description</label>
                                                <div class="ckeditor-classic"></div>
                                                <textarea name="full_desc" id="full_desc" class="form-control" id="fullDesc" placeholder="Enter the Product Description..." rows="10"
                                                    cols="5">{{ (!empty($getproduct->full_desc)) ? $getproduct->full_desc: '' }}</textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xxl-4">
                                            <h5 class="card-title mb-3">Images</h5>
                                            <p class="text-muted">Product Information refers to any information held by an
                                                organization about the products it produces, buys, sells or distributes.</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-8">
                                            <div class="mb-3">
                                                <label class="form-label">Product Images </label>
                                                        <div class="col-md-12">
                                                            <input type="text" id="image_id" name="image_id" value="">
                                                            <label for=""><b>Image</b></label><br>
                                                            <div id="image" class="dropzone dz-clickable">
                                                                <div class="dz-message needsclick">
                                                                    <br>Drop files here or click to upload.
                                                                    <br><br>
                                                                </div>
                                                            </div>
                                                        </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xxl-4">
                                            <h5 class="card-title mb-3">General Info</h5>
                                            <p class="text-muted mb-0">An informational product can be a digital book (or
                                                e-book), a digital report, a white paper, a piece of software, audio or
                                                video
                                                files, a website, an e-zine or a newsletter.</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xxl-8">
                                            <div class="row gy-3">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label for="manufacturer-name-input"
                                                            class="form-label">Manufacturer Name</label>
                                                        <input value="{{ (!empty($getproduct->manufacturername)) ? $getproduct->manufacturername: '' }}" type="text" class="form-control" id="manufacturername"
                                                            name="manufacturername" placeholder="Enter manufacturer name"
                                                            >
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label class="form-label" for="manufacturerbrand">Manufacturer
                                                            Brand</label>
                                                        <input value="{{ (!empty($getproduct->manufacturerbrand)) ? $getproduct->manufacturerbrand: '' }}" type="text" class="form-control" id="manufacturerbrand"
                                                            name="manufacturerbrand"
                                                            placeholder="Enter manufacturer brand">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="stocks" class="form-label">Stocks <span
                                                                class="text-danger">*</span></label>
                                                        <input value="{{ (!empty($getproduct->stocks)) ? $getproduct->stocks: '' }}" type="text" class="form-control" id="stocks"
                                                            name="stocks" placeholder="stocks" >
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label class="form-label" for="product-price-input">Price</label>
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text"
                                                                id="product-price-addon">৳</span>
                                                            <input value="{{ (!empty($getproduct->price)) ? $getproduct->price: 0 }}" type="number" class="form-control" id="price"
                                                                name="price" placeholder="Enter price"
                                                                aria-label="Price" aria-describedby="product-price-addon"
                                                                >
                                                            <div class="invalid-feedback">Please Enter a product price.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label class="form-label" for="discount">Discount price</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="product-discount-addon">৳</span>
                                                            <input value="{{ (!empty($getproduct->discount)) ? $getproduct->discount: '' }}" type="text" class="form-control" id="discount"
                                                                name="discount" placeholder="Enter discount"
                                                                aria-label="discount"
                                                                aria-describedby="product-discount-addon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label for="status" class="form-label">Status</label>
                                                        <select class="form-select" id="status" name="status"
                                                            data-choices data-choices-search-false>
                                                            <option {{ ((!empty($getproduct->status))&&($getproduct->status == 'Published') ) ? 'selected': '' }} value="Published" selected>Published</option>
                                                            <option {{ ((!empty($getproduct->status))&&($getproduct->status == 'Scheduled') ) ? 'selected': '' }} value="Scheduled">Scheduled</option>
                                                            <option {{ ((!empty($getproduct->status))&&($getproduct->status == 'Draft') ) ? 'selected': '' }} value="Draft">Draft</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label for="visibility" class="form-label">Visibility</label>
                                                        <select class="form-select" id="visibility" name="visibility"
                                                            data-choices data-choices-search-false>
                                                            <option {{ ((!empty($getproduct->visibility))&&($getproduct->visibility == 'Public') ) ? 'selected': '' }} value="Public" selected>Public</option>
                                                            <option {{ ((!empty($getproduct->visibility))&&($getproduct->visibility == 'Hidden') ) ? 'selected': '' }} value="Hidden">Hidden</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="hstack gap-2 justify-content-end mb-3">
                        <button  class="btn btn-danger"><i class="ph-x align-middle"></i>
                            Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                    </div>



                </form>

            </div>
            {{-- <button type="submit">Done</button> --}}
            {{-- <a href="https://github.com/khalilurrrahmanridoykhan">ridoy</a> --}}

            <!-- container-fluid -->



        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->
@endsection



@section('extraJs')
    <script type="text/javascript">






        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removefile(this.file[0]);
                    }
                });
            },
            url: '{{ route('admin.heroslider.temp') }}',
            maxFiles: 1,
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, respinse) {
                $("#image_id").val(respinse.id);
            }
        });

        $("#addproductfrom").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route('admin.product.save') }}',
                type: 'POST',
                dataType: 'json',
                            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
                data: $("#addproductfrom").serializeArray(),
                success: function(response) {


                    if (response.status == 200) {


                        // alert('Done');
                        location.reload();



                    } else {
                        $('.name-error').html(response.errors.name);

                    }
                },
                statusCode: {
                    200: function() {
                        // alert('Done');
                        location.reload();

                    }
                },
                error: function(e) {
                    // window.location.href = '{{ route('admin.product.index') }}';
                }
            });

        });
    </script>
@endsection
