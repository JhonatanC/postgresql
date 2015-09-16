    <section class="container">
        <h2>Datos de Branch</h2>

        @foreach($branch as $branc)
            <ul>
                <li>{{ $branc->name_branch }}</li>
            </ul>
        @endforeach

    </section>
