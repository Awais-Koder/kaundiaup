<x-app-layout>
    <div class="container-xl px-4 mt-5">

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 1-->
                <div class="card border-start-lg border-start-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-primary mb-1">{{ __('messages.total_payments') }}</div>
                                <div class="h5">$4,390</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 2-->
                <div class="card border-start-lg border-start-secondary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-secondary mb-1">{{ __('messages.total_users') }}</div>
                                <div class="h5">2547</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-user fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 3-->
                <div class="card border-start-lg border-start-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-success mb-1">{{ __('messages.total_families') }}</div>
                                <div class="h5">657</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-users fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- Dashboard info widget 4-->
                <div class="card border-start-lg border-start-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <div class="small fw-bold text-info mb-1">{{ __('messages.admin_users') }}</div>
                                <div class="h5">1</div>
                            </div>
                            <div class="ms-2"><i class="fas fa-shield fa-2x text-gray-200"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
