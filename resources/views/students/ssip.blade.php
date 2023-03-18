<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Student Start-up and Innovation" />
        <x-page-content>
            <div class="tabs is-centered">
                <ul>
                    <li class="tab is-active" data-content="tab-about"><a>About SSIP</a></li>
                    <li class="tab" data-content="tab-core"><a>Core Committee</a></li>
                    <li class="tab" data-content="tab-scrutiny"><a>Scrutiny Committee</a></li>
                    <li class="tab" data-content="tab-contact"><a>Contact Us</a></li>
                </ul>
            </div>
            <div class="tab-content" id="tab-about">
                <div class="box">
                    @include('students.ssip.about')
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-core">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box">
                            @include('students.ssip.committee', ['committee' => $committeeC])
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-scrutiny">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box">
                            @include('students.ssip.committee', ['committee' => $committeeS])
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-contact">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box">
                            <div class="columns">
                                <div class="column">
                                    <p class="heading has-text-primary is-size-5 has-text-weight-bold">
                                        DR. DHIREN P. SHAH
                                    </p>
                                    Principal & Professor</br>
                                    C. K. Pithawalla Institute of Pharmaceutical Science and Research, Surat</br>
                                    Office Number: 63550 65636</br>
                                    Mobile No.: 9427474602
                                </div>
                                <div class="column">
                                    <p class="heading has-text-primary is-size-5 has-text-weight-bold">
                                        DR. VINODKUMAR D. RAMANI
                                    </p>
                                    Associate Professor,</br>
                                    C. K. Pithawalla Institute of Pharmaceutical Science and Research, Surat</br>
                                    Office Number: 63550 65636</br>
                                    Mobile No.: 9913792913
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
