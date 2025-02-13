<!-- start: sidebar -->
<div class="sidebar p-1 py-md-1">
    <div class="container-fluid">
        <!-- sidebar: title-->
        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">P</span><span>2KB</span></h4>

        </div>
        <!-- sidebar: menu list -->
        <div class="main-menu flex-grow-1">
            <ul class="menu-list">
                @if (Auth::user()->is_remaja == 0)
                    <li class="divider py-2 lh-sm"><span class="small">MENU UTAMA</span><br>
                        {{-- <small class="text-muted">Unique dashboard designs </small> --}}
                    </li>
                    <li>
                        <a class="m-link" id="m-link-dashboard" href="{{ url('/dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                class="bi bi-speedometer2" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                <path fill-rule="evenodd"
                                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                            </svg>
                            <span class="ms-2">Dashboard</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'keluarga' && Auth::user()->is_remaja == 0)
                    <li>
                        <a class="m-link" id="m-link-anggota-keluarga"
                            href="{{ url('anggota-keluarga/' . Auth::user()->profil->kartu_keluarga_id) }}">
                            <i class="fa-solid fa-people-roof"></i>
                            <span class="ms-2">Anggota Keluarga</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->is_remaja == 0)
                    <li class="collapsed">
                        <a class="m-link collapsed" id="m-link-deteksi-stunting" data-bs-toggle="collapse"
                            data-bs-target="#menu-deteksi-stunting" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                class="bi bi-ui-checks" viewBox="0 0 16 16">
                                <path
                                    d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708l-2 2zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708l-2 2zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <span class="ms-2">Deteksi Stunting</span>
                            <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-deteksi-stunting">
                            <li><a class="ms-link" id="ms-link-stunting-anak"
                                    href="{{ url('stunting-anak') }}">Stunting Anak</a></li>
                            <li><a class="ms-link" id="ms-link-ibu-melahirkan-stunting"
                                    href="{{ url('deteksi-ibu-melahirkan-stunting') }}">Ibu Melahirkan Stunting</a>
                            </li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" id="m-link-moms-care" data-bs-toggle="collapse"
                            data-bs-target="#menu-moms-care" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                class="bi bi-person-hearts" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z" />
                            </svg>
                            <span class="ms-2">Moms Care</span>
                            <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-moms-care">
                            <li><a class="ms-link" id="ms-link-perkiraan-melahirkan"
                                    href="{{ url('perkiraan-melahirkan') }}">Perkiraan Melahirkan</a></li>
                            <li><a class="ms-link" id="ms-link-deteksi-dini"
                                    href="{{ url('deteksi-dini') }}">Deteksi Dini</a></li>
                            <li><a class="ms-link" id="ms-link-anc" href="{{ url('anc') }}">ANC</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" id="m-link-tumbuh-kembang" data-bs-toggle="collapse"
                            data-bs-target="#menu-tumbuh-kembang" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
                            </svg>
                            <span class="ms-2">Tumbuh Kembang</span>
                            <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                        </a>

                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-tumbuh-kembang">
                            <li><a class="ms-link" id="ms-link-pertumbuhan-anak"
                                    href="{{ url('pertumbuhan-anak') }}">Pertumbuhan Anak</a></li>
                            <li><a class="ms-link" id="ms-link-perkembangan-anak"
                                    href="{{ url('perkembangan-anak') }}">Perkembangan Anak</a></li>
                        </ul>
                    </li>
                @endif
                @if (in_array(Auth::user()->role, ['bidan', 'penyuluh', 'admin']) || Auth::user()->is_remaja == 1)
                    <li>
                        <a class="m-link" id="m-link-randa-kabilasa" href="{{ url('randa-kabilasa') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd"
                                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                            <span class="ms-2">Randa Kabilasa</span>
                        </a>
                    </li>
                @endif


                <!-- Menu: Sub menu ul -->
                @if (Auth::user()->role != 'keluarga')
                    <li class="collapsed">
                        <a class="m-link" id="m-link-peta-data" data-bs-toggle="collapse"
                            data-bs-target="#menu-peta-data" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-map-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z" />
                            </svg>
                            <span class="ms-2">Peta Data</span>
                            <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                        </a>

                        <ul class="sub-menu collapse" id="menu-peta-data">
                            <li><a class="ms-link" id="ms-link-peta-deteksi-stunting"
                                    href="{{ url('map-deteksi-stunting') }}">Deteksi Stunting</a></li>
                            <li><a class="ms-link" id="ms-link-peta-moms-care"
                                    href="{{ url('map-moms-care') }}">Moms Care</a></li>
                            <li><a class="ms-link" id="ms-link-peta-tumbuh-kembang"
                                    href="{{ url('map-tumbuh-kembang') }}">Tumbuh Kembang</a></li>
                            <li><a class="ms-link" id="ms-link-peta-randa-kabilasa"
                                    href="{{ url('map-randa-kabilasa') }}">Randa Kabilasa</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
            @if (in_array(Auth::user()->role, ['admin', 'bidan', 'penyuluh']))
                <ul class="menu-list">
                    <li class="divider py-2 lh-sm"><span class="small">MASTER DATA</span><br></li>
                    @if (Auth::user()->role == 'admin')
                        <li class="collapsed">
                            <a class="m-link collapsed" id="m-link-master-data-deteksi-stunting"
                                data-bs-toggle="collapse" data-bs-target="#menu-master-data-deteksi-stunting" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                    class="bi bi-ui-checks" viewBox="0 0 16 16">
                                    <path
                                        d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708l-2 2zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708l-2 2zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <span class="ms-2">Deteksi Stunting</span>
                                <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                            </a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-master-data-deteksi-stunting">
                                <li><a class="ms-link" id="ms-link-master-data-ibu-melahirkan-stunting"
                                        href="{{ url('masterData/soal-ibu-melahirkan-stunting') }}">Soal Ibu
                                        Melahirkan
                                        Stunting</a>
                                </li>
                            </ul>
                        </li>
                        <li class="collapsed">
                            <a class="m-link" id="m-link-master-data-moms-care" data-bs-toggle="collapse"
                                data-bs-target="#menu-master-data-moms-care" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                    class="bi bi-person-hearts" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z" />
                                </svg>
                                <span class="ms-2">Moms Care</span>
                                <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                            </a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-master-data-moms-care">
                                <li><a class="ms-link" id="ms-link-master-data-deteksi-dini"
                                        href="{{ url('masterData/soal-deteksi-dini') }}">Soal Deteksi Dini</a></li>
                            </ul>
                        </li>
                        <li class="collapsed">
                            <a class="m-link" id="m-link-master-data-randa-kabilasa" data-bs-toggle="collapse"
                                data-bs-target="#menu-master-data-randa-kabilasa" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                    class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd"
                                        d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                </svg>
                                <span class="ms-2">Randa Kabilasa</span>
                                <span class="arrow fa fa-angle-right ms-auto text-end"></span>

                            </a>

                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-master-data-randa-kabilasa">
                                <li><a class="ms-link" id="ms-link-master-data-soal-mencegah-malnutrisi"
                                        href="{{ url('masterData/soal-mencegah-malnutrisi') }}">Soal Hemoglobin
                                        Mencegah
                                        Malnutrisi</a></li>
                                <li><a class="ms-link" id="ms-link-master-data-soal-meningkatkan-life-skill"
                                        href="{{ url('masterData/soal-meningkatkan-life-skill') }}  ">Soal
                                        Meningkatkan
                                        Life
                                        Skill &
                                        Potensi
                                        Diri</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="m-link" id="m-link-wilayah" href="{{ url('masterData/provinsi') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-map-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z" />
                                </svg>
                                <span class="ms-2">Wilayah</span>
                            </a>
                        </li>
                    @endif
                    <li class="collapsed">
                        <a class="m-link" id="m-link-profil" data-bs-toggle="collapse"
                            data-bs-target="#menu-profil" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                            </svg>
                            <span class="ms-2">Profil</span>
                            <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                        </a>

                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-profil">
                            <li><a class="ms-link" id="ms-link-master-data-profil-keluarga"
                                    href="{{ url('/keluarga') }}">Keluarga</a></li>
                            <li><a class="ms-link" id="ms-link-master-data-profil-bidan"
                                    href="{{ url('/bidan') }}">Bidan</a></li>
                            <li><a class="ms-link" id="ms-link-master-data-profil-penyuluh"
                                    href="{{ url('/penyuluh') }}">Penyuluh</a></li>
                            @if (Auth::user()->id == '5gf9ba91-4778-404c-aa7f-5fd327e87e80')
                                <li><a class="ms-link" id="ms-link-master-data-profil-admin"
                                        href="{{ url('/admin') }}">Admin</a></li>
                            @endif
                        </ul>
                    </li>

                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'bidan')
                        <li>
                            <a class="m-link" id="m-link-akun" href="{{ route('user.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                <span class="ms-2">Akun</span>
                            </a>
                        </li>
                    @endif
                </ul>
            @endif

        </div>
        <!-- sidebar: footer link -->
        <ul class="menu-list nav navbar-nav flex-row text-center">
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="{{ route('logout') }}" title="sign-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z" />
                        <path class="fill-secondary"
                            d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>
