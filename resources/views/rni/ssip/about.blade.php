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
                    <div class="content has-text-justified">
                        <div class="columns">
                            <div class="column">
                                <p>
                                    The Student Startup & Innovation Policy (SSIP) of the Government of Gujarat is a
                                    first-of-its-kind, integrated, state-wide, university-based innovation policy in the
                                    country
                                    that shall create a much-needed Innovation and Pre-incubation Ecosystem Support for
                                    Students
                                    (IPIES) across the state, adding to the start-up ecosystem of Gujarat. The policy
                                    aims to
                                    create a culture of innovation and a spirit of entrepreneurship that the state of
                                    Gujarat
                                    already possesses.
                                </p>
                                <div class="columns">
                                    <div class="column">
                                        <h5>Our Theme</h5>
                                        <p>Burgeoning start-up eco-system to uplift and support a brand academia-led
                                            innovation,
                                            pre-incubation, scale-up, and marketing.</p>
                                    </div>
                                    <div class="column">
                                        <h5>Out Focus</h5>
                                        <p>
                                            Constitution of Student start-up and innovation Cell, C. K. Pithawalla
                                            Institute of
                                            Pharmaceutical Science & Research, Surat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <h4 class="is-size-4">Objectives</h4>
                                <ul>
                                    <li>To facilitate and pre-incubate innovative ideas, to go through a stage of proof
                                        of
                                        concept, prototype, product, testing and trial, redesign, and development of
                                        utility.
                                    </li>
                                    <li>To develop an environment for creativity to flourish and an end-to-end support
                                        system in
                                        educational institutions to allow ample support to innovative ideas for better
                                        execution.</li>
                                    <li>To create pathways for the mind to market by harnessing and hand-holding
                                        projects/research/innovation/ideas of students in Gujarat.</li>
                                    <li>To create a common platform to showcase, support, and upscale innovations for
                                        motivating
                                        stakeholders as well as for an opportunity to create value for money and value
                                        for many.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-core">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box">
                            @include('rni.ssip.committee', ['committee' => $committeeC])
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content is-hidden" id="tab-scrutiny">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <div class="box">
                            @include('rni.ssip.committee', ['committee' => $committeeS])
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
