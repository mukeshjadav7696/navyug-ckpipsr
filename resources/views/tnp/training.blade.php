<x-app-layout>
    <x-slot name="content">
        <x-site.pagetitle title="Industrial Training" />
        <x-page-content>
            <div class="columns is-multiline content has-text-justified">
                <div class="column is-12">
                    <p>
                        C. K. Pithawala Institute of Pharmaceutical Science and Research Being a leading and renowned
                        Pharmacy institute in south Gujarat zone since 2005. We have a vision Committed to promote high-
                        quality education, training, and research in pharmacy to meet the needs of tomorrow’s healthy
                        society.
                        We believe that the End product of our educational system is students and we are always having a
                        strong desire to prepare our students as per requirement of the industry. Therefore, during the
                        study
                        period, our schedule comprised of industrial visits /Industrial Experience /Training and as well
                        as
                        encourage to take part in various seminars/conferences to update them with advancement in the
                        pharma sector.
                    </p>
                </div>
                <div class="column is-12">
                    <h2 class="subtitle is-4">Objectives of Industrial Training</h2>
                    <ol>
                        <li>Practical application of theoretical knowledge: Industrial training aims to bridge the gap
                            between theoretical learning and practical implementation. It allows students to apply the
                            knowledge and skills they have acquired during their academic studies in a real work
                            environment.</li>
                        <li>Skill development: The training provides an opportunity for students to develop and enhance
                            their technical, professional, and interpersonal skills. They can learn new techniques,
                            tools, and methodologies relevant to their field of study, and acquire valuable
                            industry-specific skills.</li>
                        <li>Industry exposure and understanding: Industrial training offers students the chance to gain
                            exposure to the industry they are interested in. They can observe and understand the
                            organizational structure, work processes, and culture of the industry, as well as the roles
                            and responsibilities of different professionals.</li>
                        <li>Networking opportunities: During industrial training, students can establish connections and
                            build relationships with professionals in their field of interest. These connections can be
                            beneficial for future career prospects, such as obtaining references or job opportunities.
                        </li>
                        <li>Employability and career readiness: The overall objective of industrial training is to
                            enhance the employability of students and prepare them for their future careers. By gaining
                            practical experience and industry exposure, students become more attractive to potential
                            employers and better equipped to enter the workforce.</li>
                        <li>Self-assessment and personal growth: Industrial training provides a platform for students to
                            assess their strengths, weaknesses, and areas for improvement. They can identify their
                            interests and aptitudes, and gain valuable insights into their career preferences and goals.
                        </li>
                    </ol>
                </div>
                <div class="column is-9">
                    <h2 class="subtitle is-4">Committee Members</h2>
                    <div class="box">
                        @include('cells.committee', compact('committee'))
                    </div>
                </div>
            </div>
        </x-page-content>
    </x-slot>

</x-app-layout>
