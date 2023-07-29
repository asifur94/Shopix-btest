@extends('admin.layoutsMain.adminapp')

@section('content')



    <div id="layout-wrapper">
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">



                    <div id="instructorList">



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">

                                    </div>
                                    <div class="card-body mt-3">
                                        <div class="table-responsive table-card">
                                            <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>

                                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor_id"></th>
                                                        <th scope="5"  rowspan=""  class="sort cursor-pointer" data-sort="instructor">Shipping Text</th>

                                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor"></th>

                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    {{-- @dd($product) --}}
                                                    <form action="{{ route('admin.shipping.saveupdate') }}" method="POST">
                                                        @csrf

                                                    <tr>


                                                        <td class="courses_total"></td>
                                                        <td class="products" >
                                                            <input value="{{ (!empty($sipping->sheepings_text)) ? $sipping->sheepings_text: '' }}" type="text" class="form-control" name="sheepings_text" id="sheepings_text" placeholder="Shipping Text">

                                                        </td>
														 <td class="courses_total">

                                                         </td>



                                                        <td>
                                                            <button type="submit" class="btn btn-primary">Action</button>

                                                        </td>
                                                    </tr>
                                                </form>
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                            <div class="noresult" style="display: none">
                                                <div class="text-center py-4">
                                                    <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 164+ instructors We did not find any instructors for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mt-4 pt-3" id="pagination-element">
                                            <div class="col-sm">
                                                <div class="text-muted text-center text-sm-start">
                                                    Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-sm-auto mt-3 mt-sm-0">
                                                <div class="pagination-wrap hstack justify-content-center gap-2">
                                                    <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                                        Previous
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                                    <a class="page-item pagination-next" href="javascript:void(0)">
                                                        Next
                                                    </a>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Steex.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>


        <!-- Modal -->
        <div class="modal fade" id="addInstructor" tabindex="-1" aria-labelledby="addInstructorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content border-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addInstructorModalLabel">Product Strok</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-addInstructorModal"></button>
                    </div>

                    <form class="tablelist-form" id="addstockdatafrom" novalidate autocomplete="off">
                        <div class="modal-body">
                            <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                            <input type="hidden" id="id-field">
                            <input type="hidden" id="rating-field">


                            <div class="row">

                                <div class="mb-3">
                                    <label for="exampleInputdate" class="form-label">Product Strok Date</label>
                                    <input type="date" class="form-control" id="exampleInputdate">
                                </div>

                               <div class="mb-3">
                                <label for="product-category-input" class="form-label">Select Product</label>

                                <input  type="text" id="name" class="form-control" placeholder="Oil Wax Man Long Wallet" readonly >

                               </div>


                              <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="product-stock-input" class="form-label">Stocks</label>
                                        <input  type="number" id="stocks" name="stocks" class="form-control" placeholder="Enter product stocks" required >
                                    </div>
                                </div>




                           </div><!--end row-->
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                                <button type="submit" class="btn btn-primary" id="add-btn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- modal-content -->
            </div>
        </div><!--end modal-->



            <!-- Modal -->
            <div class="modal fade" id="EditProdut" tabindex="-1" aria-labelledby="addInstructorModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInstructorModalLabel">Website Product </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-addInstructorModal"></button>
                        </div>

                        <form class="tablelist-form" id="productfromedit" novalidate autocomplete="off">
                            <div class="modal-body">
                                <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                                <input type="hidden" name="orders_id" id="orders_id">
                                {{-- <input type="hidden" id="rating-field"> --}}


                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="productTitle" class="form-label">Product Title</label>
                                            <input value="{{ (!empty($getproduct->name)) ? $getproduct->name: '' }}" type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter product title" >
                                                <p class="text-danger error name-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="productCategories" class="form-label">Colors</label>
                                            <select class="form-control" data-choices name="color" id="color">
                                                <option value="">Select Color</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'green') ) ? 'selected': '' }}  value="green">Green</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'black') ) ? 'selected': '' }}  value="black">Black</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'red') ) ? 'selected': '' }}  value="red">Red</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'blue') ) ? 'selected': '' }}  value="blue">Blue</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'yellow') ) ? 'selected': '' }}  value="yellow">Yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="productType" class="form-label">Product Type</label>
                                            <select class="form-control" data-choices name="type" id="type">
                                                <option  value="">Select Type</option>
                                                <option {{ ((!empty($getproduct->type))&&($getproduct->type == 'Simple') ) ? 'selected': '' }} value="Simple">Simple</option>
                                                <option {{ ((!empty($getproduct->type))&&($getproduct->type == 'Classified') ) ? 'selected': '' }} value="Classified">Classified</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="shortDecs" class="form-label">Short Description</label>
                                            <textarea class="form-control" id="short_desc" name="short_desc" placeholder="Must enter minimum of a 100 characters"
                                                rows="3">{{ (!empty($getproduct->short_desc)) ? $getproduct->short_desc: '' }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
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
                                                    <label class="form-label">Tags</label>
                                                    <input value="{{ (!empty($getproduct->tag)) ? $getproduct->tag: '' }}"  name="tag" id="tag" class="form-control" id="choices-text-unique-values" data-choices
                                                        data-choices-text-unique-true data-choices-removeItem type="text"
                                                        value="Fashion, Style, Brands, Puma">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="readonlyInput" class="form-label">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">P</span>
                                                <input value="{{ (!empty($getproduct->price)) ? $getproduct->price: '' }}" type="text" class="form-control" id="product_price"
                                                    name="product_price"  >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Q</span>
                                                <input value="{{ (!empty($getproduct->stocks)) ? $getproduct->stocks: '' }}" type="number" class="form-control" id="quantity"
                                                    name="quantity" placeholder="Q-N" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="discount" class="form-label">Discount</label>
                                            <input value="{{ (!empty($getproduct->discount)) ? $getproduct->discount: '' }}" type="number" class="form-control" id="discount" name="discount"
                                                placeholder="Discount" required>
                                        </div>
                                    </div>
                                    <!--end col-->



                                    <div class="col-lg-12">
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
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                            class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                                    <button type="submit" class="btn btn-primary" id="add-btn">Edit Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- modal-content -->
                </div>
            </div>
            <!--end modal-->


            <!-- Modal -->
            <div class="modal fade" id="justviewproduct" tabindex="-1" aria-labelledby="addInstructorModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInstructorModalLabel">Website Product </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-addInstructorModal"></button>
                        </div>

                        <form class="tablelist-form" id="productfromjustview" novalidate autocomplete="off">
                            <div class="modal-body">
                                <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                                <input type="hidden" name="orders_id" id="orders_id">
                                {{-- <input type="hidden" id="rating-field"> --}}


                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="productTitle" class="form-label">Product Title</label>
                                            <input value="{{ (!empty($getproduct->name)) ? $getproduct->name: '' }}" type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter product title" readonly>
                                                <p class="text-danger error name-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="productCategories" class="form-label">Colors</label>
                                            <select class="form-control" data-choices name="color" id="color" readonly>
                                                <option value="">Select Color</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'green') ) ? 'selected': '' }}  value="green">Green</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'black') ) ? 'selected': '' }}  value="black">Black</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'red') ) ? 'selected': '' }}  value="red">Red</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'blue') ) ? 'selected': '' }}  value="blue">Blue</option>
                                                <option {{ ((!empty($getproduct->color))&&($getproduct->color == 'yellow') ) ? 'selected': '' }}  value="yellow">Yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="productType" class="form-label">Product Type</label>
                                            <select class="form-control" data-choices name="type" id="type"readonly>
                                                <option  value="">Select Type</option >
                                                <option {{ ((!empty($getproduct->type))&&($getproduct->type == 'Simple') ) ? 'selected': '' }} value="Simple">Simple</option>
                                                <option {{ ((!empty($getproduct->type))&&($getproduct->type == 'Classified') ) ? 'selected': '' }} value="Classified">Classified</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="shortDecs" class="form-label">Short Description</label>
                                            <textarea readonly class="form-control" id="short_desc" name="short_desc" placeholder="Must enter minimum of a 100 characters"
                                                rows="3">{{ (!empty($getproduct->short_desc)) ? $getproduct->short_desc: '' }} </textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="productBrand" class="form-label">Brand </label>
                                                    <input readonly value="{{ (!empty($getproduct->Brand)) ? $getproduct->Brand: '' }}" type="text" class="form-control" id="Brand"
                                                        name="Brand" placeholder="Enter brand" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Tags</label>
                                                    <input readonly value="{{ (!empty($getproduct->tag)) ? $getproduct->tag: '' }}"  name="tag" id="tag" class="form-control" id="choices-text-unique-values" data-choices
                                                        data-choices-text-unique-true data-choices-removeItem type="text"
                                                        value="Fashion, Style, Brands, Puma">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="readonlyInput" class="form-label">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">P</span>
                                                <input readonly type="text" class="form-control" id="price"
                                                    name="price" value="{{ (!empty($getproduct->price)) ? $getproduct->price: '' }}" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="stocks" class="form-label">Quantity</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Q</span>
                                                <input readonly value="{{ (!empty($getproduct->stocks)) ? $getproduct->stocks: '' }}" type="number" class="form-control" id="stocks"
                                                    name="stocks" placeholder="Q-N" required>
                                            </div>
                                        </div>
                                    </div>


                                    <!--end col-->



                                    <div class="col-lg-12">
                                        <div class="row gy-3">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="manufacturer-name-input"
                                                        class="form-label">Manufacturer Name</label>
                                                    <input readonly value="{{ (!empty($getproduct->manufacturername)) ? $getproduct->manufacturername: '' }}" type="text" class="form-control" id="manufacturername"
                                                        name="manufacturername" placeholder="Enter manufacturer name"
                                                        >
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div>
                                                    <label class="form-label" for="manufacturerbrand">Manufacturer
                                                        Brand</label>
                                                    <input readonly value="{{ (!empty($getproduct->manufacturerbrand)) ? $getproduct->manufacturerbrand: '' }}" type="text" class="form-control" id="manufacturerbrand"
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
                                                        <input readonly value="{{ (!empty($getproduct->price)) ? $getproduct->price: 0 }}" type="number" class="form-control" id="price"
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
                                                        <input readonly value="{{ (!empty($getproduct->discount)) ? $getproduct->discount: '' }}" type="text" class="form-control" id="discount"
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
                                                    <select readonly class="form-select" id="status" name="status"
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
                                                    <select readonly class="form-select" id="visibility" name="visibility"
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
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                            class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- modal-content -->
                </div>
            </div>
            <!--end modal-->

            <!-- deleteRecordModal -->
            <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-5"></i>
                                </div>
                                <div class="mt-4">
                                    <h4 class="mb-2">Are you sure For Delete ?</h4>
                                    <p class="text-muted mx-3 mb-0">Are you sure you want to Delete This Product ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                                <button type="button" class="btn w-sm btn-light btn-hover"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger btn-hover" id="delete_product">Yes,
                                    It!</button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /deleteRecordModal -->
    </div>
@endsection


@section('extraJs')
    <script type="text/javascript">


// $(document).ready(function() {
//             $(document).on('click', '#getsingelproductstack', function() {
//                 // var getproductid = $(this).val();

//                 // alert(getproductid);

//                 $.ajax({
//                     type: "GET",
//                     url: "{{ route('admin.productlist.getstrok') }}",
//                     success: function(response) {
//                         console.log(response.singeproduct);
//                         $('#name').val(response.singeproduct.name);
//                         $('#stocks').val(response.singeproduct.stocks);

//                     }
//                 });



//             });
//         });


//         $("#addstockdatafrom").submit(function(event) {
//             event.preventDefault();

//             $.ajax({
//                 url: '{{ route('admin.productlist.addstrok') }}',
//                 type: 'POST',
//                 dataType: 'json',
//                                 headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             },
//                 data: $("#addstockdatafrom").serializeArray(),
//                 success: function(response) {


//                     if (response.status == 200) {


//                         location.reload();


//                     } else {

//                     }
//                 },
//                 statusCode: {
//                     200: function() {
//                         location.reload();

//                     }
//                 },
//                 error: function(e) {
//                     // window.location.href = '{{ route('admin.product.index') }}';
//                 }
//             });

//         });




//         // $(document).ready(function() {
//         //     $(document).on('click', '#getorderdid', function() {
//         //         var getproductid = $(this).val();

//         //         // alert(getproductid);

//         //         $.ajax({
//         //             type: "GET",
//         //             url: "/admin/plaseorder/edit/" + getproductid,
//         //             success: function(response) {
//         //                 console.log(response.singelorder.created_at);
//         //                 $('#orders_id').val(response.singelorder.orders_id);
//         //                 $('#orders_idmain').val(response.singelorder.orders_id);
//         //                 $('#customer_name').val(response.singelorder.customer_name);
//         //                 $('#customer_phone').val(response.singelorder.phone);
//         //                 $('#customer_area').val(response.singelorder.customer_area);
//         //                 $('#customer_full_address').val(response.singelorder
//         //                     .customer_full_address);
//         //                 $('#product_name').val(response.singelorder.product_name);
//         //                 $('#product_price').val(response.singelorder.product_price);
//         //                 $('#quantity').val(response.singelorder.quantity);
//         //                 $('#discount').val(response.singelorder.discount);
//         //                 // $totalbill = response.singelorder.total_bill + response.singelorder.product_price;
//         //                 $('#total_bill').val(response.singelorder.total_bill);
//         //                 $('#Advance').val(response.singelorder.Advance);
//         //                 // $cash_collection = $totalbill - response.singelorder.Advance;
//         //                 $('#cash_collection').val(response.singelorder.cash_collection);
//         //                 $('#extra_note').val(response.singelorder.extra_note);
//         //                 $('#payment_status').val(response.singelorder.payment_status);
//         //                 $('#order_status').val(response.singelorder.order_status);
//         //             }
//         //         });



//         //     });
//         // });

//         $(document).ready(function() {
//             $(document).on('click', '#getproductidforview', function() {
//                 var getproductid = $(this).val();

//                 // alert(getproductid);

//                 $.ajax({
//                     type: "GET",
//                     url: "/admin/productlist/justview/",
//                     success: function(response) {
//                         console.log(response.singelproduct);
//                         $('#stocks').val(response.singelproduct.stocks);


//                     }
//                 });



//             });
//         });


//         $(document).ready(function() {
//             $(document).on('click', '#getproductidfordelte', function() {
//                 var getproductid = $(this).val();

//                 // alert(getproductid);


//                 $(document).on('click', '#delete_product', function() {



//                     $.ajax({
//                         type: "POST",
//                         url: "{{ route('admin.productlist.delete') }}",
//                         dataType: 'json',
//                         data: getproductid,
//                         headers: {
//                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                         },
//                         success: function(response) {
//                             // console.log(response.singelorder.created_at);

//                         },
//                         statusCode: {
//                             200: function() {
//                                 location.reload();
//                             }
//                         },
//                         error: function(e) {
//                             // window.location.href = '{{ route('admin.product.index') }}';
//                         }
//                     });


//                 });


//             });

//         });








//         $("#productfromedit").submit(function(event) {
//             event.preventDefault();

//             $.ajax({
//                 url: '{{ route('admin.productlist.save') }}',
//                 type: 'POST',
//                 dataType: 'json',
//                 headers: {
//                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                         },
//                 data: $("#productfromedit").serializeArray(),
//                 success: function(response) {


//                     if (response.status == 200) {


//                         location.reload();


//                     } else {

//                     }
//                 },
//                 statusCode: {
//                     200: function() {
//                         location.reload();

//                     }
//                 },
//                 error: function(e) {
//                     // window.location.href = '{{ route('admin.product.index') }}';
//                 }
//             });

//         });
//     </script>
{{-- // @endsection --}}
