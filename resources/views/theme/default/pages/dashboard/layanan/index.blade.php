@extends('theme.default.pages.dashboard.home')
@section('dashboard-layanan')
    <div class="card">
        <div class="card-header">
            <div class="d-md-flex">
                <form class="form-inline" action="#" method="get">
                    <div class="form-group d-flex align-items-center mb-0"> <i class="fa fa-search"></i>
                        <input class="form-control-plaintext" type="text" placeholder="Search...">
                    </div>
                </form>
                <div class="flex-grow-1 text-end d-md-block d-none">
                    <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                        <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New
                        </div>
                        <div style="height: 0px;width: 0px; overflow:hidden;">
                            <input id="upfile" type="file" onchange="sub(this)">
                        </div>
                    </form>
                    <div class="btn btn-outline-primary ms-2"><i data-feather="upload"> </i>Upload </div>
                </div>
            </div>
        </div>
        <div class="card-body file-manager">
            <h5 class="mb-2">Quick Access </h5>
            <ul class="quick-file d-flex flex-row">
                <li>
                    <div class="quick-box"><i class="fa fa-youtube-play font-danger"></i></div>
                    <h6>Videos</h6>
                </li>
                <li>
                    <div class="quick-box"><i class="fa fa-th font-info"></i></div>
                    <h6>Apps</h6>
                </li>
                <li>
                    <div class="quick-box"><i class="fa fa-file-text-o font-secondary"></i></div>
                    <h6>Document</h6>
                </li>
                <li>
                    <div class="quick-box"><i class="fa fa-music font-warning"></i></div>
                    <h6>Music</h6>
                </li>
                <li>
                    <div class="quick-box"><i class="fa fa-download font-primary"></i></div>
                    <h6>Download</h6>
                </li>
                <li>
                    <div class="quick-box"><i class="fa fa-folder font-info"></i></div>
                    <h6>Folder</h6>
                </li>
                <li>
                    <div class="quick-box"><i class="fa fa-file-archive-o font-secondary"></i></div>
                    <h6>Zip File</h6>
                </li>
                <li>
                    <div class="quick-box"><i class="fa fa-trash font-danger"></i></div>
                    <h6>Trash</h6>
                </li>
            </ul>
            <h5 class="mt-4 mb-2">Folders</h5>
            <ul class="folder">
                <li class="folder-box">
                    <div class="d-block"><i class="f-44 fa fa-file-archive-o txt-warning"></i><i
                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                        <div class="mt-3">
                            <h6>Tivo admin</h6>
                            <p>20 file<span class="pull-right"> <i class="fa fa-clock-o"> </i> 2 Hour ago</span></p>
                        </div>
                    </div>
                </li>
                <li class="folder-box">
                    <div class="d-block"><i class="f-44 fa fa-folder txt-warning"></i><i
                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                        <div class="mt-3">
                            <h6>Viho admin</h6>
                            <p>14 file<span class="pull-right"> <i class="fa fa-clock-o"> </i> 3 Hour ago</span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="folder-box">
                    <div class="d-block"><i class="f-44 fa fa-file-archive-o txt-warning"></i><i
                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                        <div class="mt-3">
                            <h6>Unice admin</h6>
                            <p>15 file<span class="pull-right"> <i class="fa fa-clock-o"> </i> 3 Day ago</span>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="folder-box">
                    <div class="d-block"><i class="f-44 fa fa-folder txt-warning"></i><i
                            class="fa fa-ellipsis-v me-0 f-14 ellips"></i>
                        <div class="mt-3">
                            <h6>Koho admin</h6>
                            <p>10 file<span class="pull-right"> <i class="fa fa-clock-o"> </i> 1 Day ago</span>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
            <h5 class="mt-4 mb-2">Files </h5>
            <ul class="d-flex flex-row files-content">
                <li class="folder-box d-flex align-items-center">
                    <div class="d-flex align-items-center files-list">
                        <div class="flex-shrink-0 file-left"><i class="f-22 fa fa-folder font-info"></i></div>
                        <div class="flex-grow-1 ms-3">
                            <h6>Logo.psd</h6>
                            <p>7 Hour ago, 2.0 MB</p>
                        </div>
                    </div>
                </li>
                <li class="folder-box d-flex align-items-center">
                    <div class="d-flex align-items-center files-list">
                        <div class="flex-shrink-0 file-left"><i class="f-22 fa fa-file-excel-o font-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6>Backend.xls</h6>
                            <p>2 Day ago, 3.0 GB</p>
                        </div>
                    </div>
                </li>
                <li class="folder-box d-flex align-items-center">
                    <div class="d-flex align-items-center files-list">
                        <div class="flex-shrink-0 file-left"><i class="f-22 fa fa-file-archive-o font-warning"></i></div>
                        <div class="flex-grow-1 ms-3">
                            <h6>Project.zip</h6>
                            <p>1 Day ago, 1.9 GB</p>
                        </div>
                    </div>
                </li>
                <li class="folder-box d-flex align-items-center">
                    <div class="d-flex align-items-center files-list">
                        <div class="flex-shrink-0 file-left"><i class="f-22 fa fa-folder font-primary"></i></div>
                        <div class="flex-grow-1 ms-3">
                            <h6>Report.txt</h6>
                            <p>1 Day ago, 0.9 KB</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
