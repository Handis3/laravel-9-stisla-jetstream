<x-app-layout>
    <x-slot name="header_content">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        {{-- <x-jet-welcome /> --}}
        <div class="row">
            <div class="col-lg-8">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Selamat Datang, {{ Auth::user()->nama_pengguna }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sentul Water Park</h6>
                        <p class="card-text">Cilacap adalah salah satu Kabupaten yang ada di Provinsi Jawa Tengah, dengan luas lahan sekitar 2.124 km² serta dihuni oleh penduduk yang mencapai 1,662 juta.

                            Destinasi tempat wisata yang ada disana pun sangatlah banyak. Mulai dari wisata pantai, pegunungan, alam, sejarah, kolam renang, hingga wisata spot selfie yang unik.
                            
                            Sentul WaterPark menjadi salah satu tempat wisata kolam renang di Cilacap yang baru beroperasi sekitar satu tahun lalu.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                    <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>
                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <p>Sentul Water Park sudah lama berdiri dan keberadaannya sudah akrab di telinga masyarakat Cilacap dan sekitarnya. Bangunan Sentul Water Park terlihat megah dan tampak mewah dengan ikon kubah emasnya. Nah, lokasi Sentul Water Park sendiri terletak di Jl. Gatot Subroto, Sidanegara, Cilacap Tengah, Klempang, Gunungsimping, Kecamatan Cilacap Tengah, Cilacap, Jawa Tengah.</p>
                            </div>
                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                {{-- <h4><a href="#">Quidem autem et impedit</a></h4> --}}
                                {{-- <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Pengunjung</h5>
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top d-flex">
                                <div class="col-lg-11">
                                    <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                                <option value="5">5</option>
                                                <option value="10" selected="">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                            </select> entries per page</label></div>
                                </div>
                                <div class="col-lg-1">
                                    <a href="#" class="btn btn-primary justify-contents-end"></a>
    
                                </div>
    
                            </div>
                            <div class="dataTable-container">
                                <table class="table datatable dataTable-table">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-sortable="" style="width: 5.69386%;"><a href="#"
                                                    class="dataTable-sorter">#</a></th>
                                            <th scope="col" data-sortable="" style="width: 27.9396%;"><a href="#"
                                                    class="dataTable-sorter">Name</a></th>
                                            <th scope="col" data-sortable="" style="width: 37.7383%;"><a href="#"
                                                    class="dataTable-sorter">Position</a></th>
                                            <th scope="col" data-sortable="" style="width: 9.26907%;"><a href="#"
                                                    class="dataTable-sorter">Age</a></th>
                                            <th scope="col" data-sortable="" style="width: 19.3326%;"><a href="#"
                                                    class="dataTable-sorter">Start Date</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Brandon Jacob</td>
                                            <td>Designer</td>
                                            <td>28</td>
                                            <td>2016-05-25</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bridie Kessler</td>
                                            <td>Developer</td>
                                            <td>35</td>
                                            <td>2014-12-05</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Ashleigh Langosh</td>
                                            <td>Finance</td>
                                            <td>45</td>
                                            <td>2011-08-12</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Angus Grady</td>
                                            <td>HR</td>
                                            <td>34</td>
                                            <td>2012-06-11</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Raheem Lehner</td>
                                            <td>Dynamic Division Officer</td>
                                            <td>47</td>
                                            <td>2011-04-19</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                                <nav class="dataTable-pagination">
                                    <ul class="dataTable-pagination-list"></ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
        </div>
    
                                        {{-- <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">top campaigns</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <tr>
                                                    <td>1. Australia</td>
                                                    <td>$70,261.65</td>
                                                </tr>
                                                <tr>
                                                    <td>2. United Kingdom</td>
                                                    <td>$46,399.22</td>
                                                </tr>
                                                <tr>
                                                    <td>3. Turkey</td>
                                                    <td>$35,364.90</td>
                                                </tr>
                                                <tr>
                                                    <td>4. Germany</td>
                                                    <td>$20,366.96</td>
                                                </tr>
                                                <tr>
                                                    <td>5. France</td>
                                                    <td>$10,366.96</td>
                                                </tr>
                                                <tr>
                                                    <td>3. Turkey</td>
                                                    <td>$35,364.90</td>
                                                </tr>
                                                <tr>
                                                    <td>4. Germany</td>
                                                    <td>$20,366.96</td>
                                                </tr>
                                                <tr>
                                                    <td>5. France</td>
                                                    <td>$10,366.96</td>
                                                </tr>
                                                <tr>
                                                    <td>3. Turkey</td>
                                                    <td>$35,364.90</td>
                                                </tr>
                                                <tr>
                                                    <td>4. Germany</td>
                                                    <td>$20,366.96</td>
                                                </tr>
                                                <tr>
                                                    <td>5. France</td>
                                                    <td>$10,366.96</td>
                                                </tr>
                                                <tr>
                                                    <td>4. Germany</td>
                                                    <td>$20,366.96</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> --}}
    </div>
</x-app-layout>
