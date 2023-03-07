@extends('admin.layout.app')
@section('content')

    <div class="content">
    <!-- Groups -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">

        </div>
        <div class="block-content">
            <h2 class="content-heading pt-0 text-center">Site Settings</h2>
            <form action="be_forms_input_groups.html" method="POST" >
                <!-- Text -->
                <div class="row">
                    <div style="visibility: hidden" class="col-lg-4">
                        <p class="text-muted">
                            Prepend or Append Text next to your inputs, useful if you you would like to add extra info
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <div class="input-group">
                        <span class="input-group-text">
                          Site Name
                        </span>
                                <input type="text" class="form-control" id="example-group1-input1" value="{{ env('APP_NAME') }}" name="example-group1-input1">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Submit</button>

                    </div>
                </div>
                <!-- END Text -->

            </form>
            <form action="be_forms_input_groups.html" method="POST" >
                <!-- Text -->

                <div class="row">
                    <div style="visibility: hidden" class="col-lg-4">
                        <p class="text-muted">
                            Prepend or Append Text next to your inputs, useful if you you would like to add extra info
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                  Site Email
                                </span>
                                <input type="email" class="form-control" id="example-group1-input2" name="example-group1-input2">

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Submit</button>

                    </div>
                </div>
                <!-- END Text -->

            </form>
        </div>
    </div>
    <!-- END Groups -->
</div>

@endsection
