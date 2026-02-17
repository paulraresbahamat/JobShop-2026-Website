<div>
    @if (session()->has('error'))
           <div wire:key="error-{{ now()->timestamp }}" 
                x-data="{ show: true }" 
                x-init="setTimeout(() => show = false, 3000)"
                x-show="show"
                x-transition.opacity.duration.500ms
                class="alert alert-danger"
                style="position: fixed; bottom: 20px; left: 20px; z-index: 1000;">
            {{ session('error') }}
        </div>
    @endif

    @php
        $byNr = $stands->keyBy('number');

        $standClasses = function($nr) use ($byNr) {
            $s = $byNr->get($nr);
            $cls = '';

            if ($s && $s->user_id) $cls .= ' ocuppied-stand';
            if ($s && auth()->check() && $s->user_id == auth()->id()) $cls .= ' selected-stand';

            return $cls;
        };

        $standLabel = function($nr) use ($byNr) {
            $s = $byNr->get($nr);
            return $s?->company_name ?? ('Stand ' . $nr);
        };
    @endphp

    <div class="container map d-flex flex-column gap-4 shadow-lg">
        <div class="d-flex gap-lg-5 gap-md-4 gap-3 align-items-center mt-5 ms-5">
            <div class="field d-flex align-items-center justify-content-center fs-3">Basketball court</div>
            <div class="food-table btn d-flex align-items-center justify-content-center me-5"></div>
        </div>

        <div class="d-flex flex-column gap-lg-5 gap-md-4 gap-3">
            <div class="d-flex gap-lg-5 gap-md-4 gap-3 justify-content-center">
                <div
                    class="stand btn d-flex justify-content-center align-items-center{{ $standClasses(10) }}"
                    id="stand-10"
                    wire:click="selectStand(10)">
                    {{ $standLabel(10) }}
                </div>

                <div
                    class="stand btn d-flex justify-content-center align-items-center{{ $standClasses(9) }}"
                    id="stand-9"
                    wire:click="selectStand(9)">
                    {{ $standLabel(9) }}
                </div>

                <div class="btn logistics-table d-flex align-items-center justify-content-center">Logistics</div>

                <div
                    class="stand btn d-flex justify-content-center align-items-center{{ $standClasses(8) }}"
                    id="stand-8"
                    wire:click="selectStand(8)">
                    {{ $standLabel(8) }}
                </div>

                <div class="d-flex gap-4">
                    <div
                        class="stand btn d-flex justify-content-center align-items-center{{ $standClasses(7) }}"
                        id="stand-7"
                        wire:click="selectStand(7)">
                        {{ $standLabel(7) }}
                    </div>

                    <div
                        class="stand btn d-flex justify-content-center align-items-center{{ $standClasses(6) }}"
                        id="stand-6"
                        wire:click="selectStand(6)">
                        {{ $standLabel(6) }}
                    </div>
                    <div class="offset-table"></div>
                </div>
            </div>

            <div class="d-flex gap-lg-5 gap-md-4 gap-3 justify-content-center align-items-end ms-5">
                <div class="stand btn d-flex justify-content-center align-items-center mb-5{{ $standClasses(5) }}"
                     id="stand-5" wire:click="selectStand(5)">{{ $standLabel(5) }}</div>

                <div class="stand btn d-flex justify-content-center align-items-center mb-5{{ $standClasses(4) }}"
                     id="stand-4" wire:click="selectStand(4)">{{ $standLabel(4) }}</div>

                <div class="btn chill-zone d-flex align-items-center justify-content-center mb-5">Chill Zone</div>

                <div class="stand btn d-flex justify-content-center align-items-center mb-5{{ $standClasses(3) }}"
                     id="stand-3" wire:click="selectStand(3)">{{ $standLabel(3) }}</div>

                <div class="stand btn d-flex justify-content-center align-items-center mb-5{{ $standClasses(2) }}"
                     id="stand-2" wire:click="selectStand(2)">{{ $standLabel(2) }}</div>

                <div class="d-flex gap-4 align-items-end">
                    <div class="stand btn d-flex justify-content-center align-items-center mb-5{{ $standClasses(1) }}"
                         id="stand-1" wire:click="selectStand(1)">{{ $standLabel(1) }}</div>
                    <div class="entrance d-flex align-items-center justify-content-center">Entrance</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flipped-map flex-row gap-5 shadow-lg align-items-center">
        <div class="d-flex gap-sm-5 gap-4 align-items-center mt-sm-5 me-sm-5 mb-sm-5 mt-4 me-4 mb-4">
            <div class="d-flex gap-sm-5 gap-4 align-items-center justify-content-center">
                <div class="d-flex gap-sm-5 gap-4">
                    <div class="d-flex flex-column gap-sm-5 gap-4">
                        <div class="flipped-stand btn d-flex justify-content-center align-items-center ms-sm-5 ms-4{{ $standClasses(5) }}"
                             id="flipped-stand-5" wire:click="selectStand(5)">{{ $standLabel(5) }}</div>

                        <div class="flipped-stand btn d-flex justify-content-center align-items-center ms-sm-5 ms-4{{ $standClasses(4) }}"
                             id="flipped-stand-4" wire:click="selectStand(4)">{{ $standLabel(4) }}</div>

                        <div class="flipped-logistics-table btn chill-zone d-flex align-items-center justify-content-center ms-sm-5 ms-4">
                            Chill Zone
                        </div>

                        <div class="flipped-stand btn d-flex justify-content-center align-items-center ms-sm-5 ms-4{{ $standClasses(3) }}"
                             id="flipped-stand-3" wire:click="selectStand(3)">{{ $standLabel(3) }}</div>

                        <div class="flipped-stand btn d-flex justify-content-center align-items-center ms-sm-5 ms-4{{ $standClasses(2) }}"
                             id="flipped-stand-2" wire:click="selectStand(2)">{{ $standLabel(2) }}</div>

                        <div class="d-flex flex-column gap-4">
                            <div class="flipped-stand btn d-flex justify-content-center align-items-center ms-sm-5 ms-4{{ $standClasses(1) }}"
                                 id="flipped-stand-1" wire:click="selectStand(1)">{{ $standLabel(1) }}</div>
                            <div class="flipped-entrance d-flex align-items-center justify-content-center">Entrance</div>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-sm-5 gap-4">
                        <div class="flipped-stand btn d-flex justify-content-center align-items-center{{ $standClasses(10) }}"
                             id="flipped-stand-10" wire:click="selectStand(10)">{{ $standLabel(10) }}</div>

                        <div class="flipped-stand btn d-flex justify-content-center align-items-center{{ $standClasses(9) }}"
                             id="flipped-stand-9" wire:click="selectStand(9)">{{ $standLabel(9) }}</div>

                        <div class="btn flipped-logistics-table d-flex align-items-center justify-content-center">
                            Logistics
                        </div>

                        <div class="flipped-stand btn d-flex justify-content-center align-items-center{{ $standClasses(8) }}"
                             id="flipped-stand-8" wire:click="selectStand(8)">{{ $standLabel(8) }}</div>

                        <div class="flipped-stand btn d-flex justify-content-center align-items-center{{ $standClasses(7) }}"
                             id="flipped-stand-7" wire:click="selectStand(7)">{{ $standLabel(7) }}</div>

                        <div class="flipped-stand btn d-flex justify-content-center align-items-center{{ $standClasses(6) }}"
                             id="flipped-stand-6" wire:click="selectStand(6)">{{ $standLabel(6) }}</div>

                        <div class="flipped-offset-table"></div>
                    </div>
                </div>

                <div class="d-flex flex-column gap-sm-5 gap-4 align-items-center">
                    <div class="flipped-field d-flex align-items-center justify-content-center fs-3">
                        Basketball court
                    </div>
                    <div class="flipped-food-table btn d-flex align-items-center justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
