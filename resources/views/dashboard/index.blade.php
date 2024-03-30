@extends('layouts.base')

@section('content')

<!-- <span class="text-dark"> {{Session::get('data')}} </span>
 -->
 <div class="container">
    <main style="margin-top: 58px;">
        <div class="container pt-4">
            <section>
                <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div class="align-self-center">
                            <i class="fas fa-pencil-alt text-info fa-3x"></i>
                          </div>
                          <div class="text-end">
                            <h3>700</h3>
                            <p class="mb-0">New Furniture</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div class="align-self-center">
                            <i class="far fa-comment-alt text-warning fa-3x"></i>
                          </div>
                          <div class="text-end">
                            <h3>350</h3>
                            <p class="mb-0">New Comments</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div class="align-self-center">
                            <i class="fas fa-chart-line text-success fa-3x"></i>
                          </div>
                          <div class="text-end">
                            <h3>64.89 %</h3>
                            <p class="mb-0">Bounce Rate</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div class="align-self-center">
                            <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                          </div>
                          <div class="text-end">
                            <h3>1423</h3>
                            <p class="mb-0">Total Visits</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div>
                            <h3 class="text-danger">278</h3>
                            <p class="mb-0">New Projects</p>
                          </div>
                          <div class="align-self-center">
                            <i class="fas fa-rocket text-danger fa-3x"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div>
                            <h3 class="text-success">1256</h3>
                            <p class="mb-0">New Clients</p>
                          </div>
                          <div class="align-self-center">
                            <i class="far fa-user text-success fa-3x"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div>
                            <h3 class="text-warning">64.89 %</h3>
                            <p class="mb-0">Conversion Rate</p>
                          </div>
                          <div class="align-self-center">
                            <i class="fas fa-chart-pie text-warning fa-3x"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                          <div>
                            <h3 class="text-info">423</h3>
                            <p class="mb-0">Support Tickets</p>
                          </div>
                          <div class="align-self-center">
                            <i class="far fa-life-ring text-info fa-3x"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
              </section>
        </div>
    </main>
</div>


@endsection