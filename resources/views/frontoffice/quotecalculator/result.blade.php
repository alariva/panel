@extends('layouts.app')

@section('contentheader_title', trans('quotecalculator.section.title'))
@section('contentheader_description', trans('quotecalculator.section.description'))

@section('main-content')
<div class="container">

    <div class="row white">
        <div class="block">

            <div class="col-xs-12 col-sm-6 col-xs-8 col-md-3 col-xs-offset-2 col-sm-offset-3 col-xs-offset-2 col-md-offset-4">
                <ul class="pricing p-green">
                    <li>
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwMCAyMDAiIGhlaWdodD0iMjAwcHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAyMDAgMjAwIiB3aWR0aD0iMjAwcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxwYXRoIGQ9Ik0xMzcuNjM1LDI4Ljc0NGgtMTEuNTkxYy0xLjUxMywwLTIuNTM5LDAuMjgtMy4wODgsMC44NTJjLTAuNTQzLDAuNTY3LTAuODE2LDEuNjMtMC44MTYsMy4yMDJ2OS4wMjYgICBjMCwxLjU2OSwwLjI3MywyLjYzNSwwLjgxNiwzLjIwMmMwLjU0OSwwLjU2NywxLjU3NSwwLjg1MiwzLjA4OCwwLjg1MmgxMS41OTFjMS41MjIsMCwyLjU1OC0wLjI4NSwzLjEwMy0wLjg1MiAgIGMwLjU0OC0wLjU2NywwLjgxOS0xLjYzMywwLjgxOS0zLjIwMnYtOS4wMjZjMC0xLjU3MS0wLjI3MS0yLjYzNS0wLjgxOS0zLjIwMkMxNDAuMTkyLDI5LjAyNCwxMzkuMTU3LDI4Ljc0NCwxMzcuNjM1LDI4Ljc0NHogICAgTTEzNy45NTgsNDIuNzk1aC0xMi4yMzZWMzEuNjU5aDEyLjIzNlY0Mi43OTV6IiBmaWxsPSIjNUU4ODlFIi8+PHBhdGggZD0iTTExMS45NzYsMjguNzQ0aC0xMS41OWMtMS41MTUsMC0yLjU0NSwwLjI4LTMuMDksMC44NTJjLTAuNTQ1LDAuNTY3LTAuODIxLDEuNjMtMC44MjEsMy4yMDJ2OS4wMjYgICBjMCwxLjU2OSwwLjI3NiwyLjYzNSwwLjgyMSwzLjIwMnMxLjU3NiwwLjg1MiwzLjA5LDAuODUyaDExLjU5YzEuNTIxLDAsMi41NTctMC4yODUsMy4xMDQtMC44NTIgICBjMC41NDUtMC41NjcsMC44MTgtMS42MzMsMC44MTgtMy4yMDJ2LTkuMDI2YzAtMS41NzEtMC4yNzMtMi42MzUtMC44MTgtMy4yMDJDMTE0LjUzMiwyOS4wMjQsMTEzLjQ5NywyOC43NDQsMTExLjk3NiwyOC43NDR6ICAgIE0xMTIuMjk4LDQyLjc5NWgtMTIuMjM5VjMxLjY1OWgxMi4yMzlWNDIuNzk1eiIgZmlsbD0iIzVFODg5RSIvPjxwYXRoIGQ9Ik0xODAuMTc4LDBIMTkuODI1QzEzLjU5MSwwLDguNDkyLDUuMDk5LDguNDkyLDExLjMzdjE3Ny4zNDJDOC40OTIsMTk0LjksMTMuNTkxLDIwMCwxOS44MjUsMjAwaDE2MC4zNTMgICBjNi4yMywwLDExLjMzLTUuMSwxMS4zMy0xMS4zMjhWMTEuMzNDMTkxLjUwOCw1LjA5OSwxODYuNDA4LDAsMTgwLjE3OCwweiBNNTIuNTc5LDE3Ny42NjNjMCwyLjk0MS0yLjQwOCw1LjM0OS01LjM1MSw1LjM0OUgzMC44MjkgICBjLTIuOTQxLDAtNS4zNTEtMi40MDctNS4zNTEtNS4zNDl2LTE2LjM5NmMwLTIuOTQ1LDIuNDEtNS4zNTQsNS4zNTEtNS4zNTRoMTYuMzk5YzIuOTQzLDAsNS4zNTEsMi40MDgsNS4zNTEsNS4zNTRWMTc3LjY2M3ogICAgTTUyLjU3OSwxMzcuMDE4YzAsMi45NDEtMi40MDgsNS4zNDUtNS4zNTEsNS4zNDVIMzAuODI5Yy0yLjk0MSwwLTUuMzUxLTIuNDAzLTUuMzUxLTUuMzQ1di0xNi40MDEgICBjMC0yLjk0MSwyLjQxLTUuMzQ5LDUuMzUxLTUuMzQ5aDE2LjM5OWMyLjk0MywwLDUuMzUxLDIuNDA3LDUuMzUxLDUuMzQ5VjEzNy4wMTh6IE01Mi41NzksOTYuMzcxYzAsMi45NDEtMi40MDgsNS4zNDYtNS4zNTEsNS4zNDYgICBIMzAuODI5Yy0yLjk0MSwwLTUuMzUxLTIuNDA1LTUuMzUxLTUuMzQ2Vjc5Ljk3YzAtMi45NDEsMi40MS01LjM0OSw1LjM1MS01LjM0OWgxNi4zOTljMi45NDMsMCw1LjM1MSwyLjQwOCw1LjM1MSw1LjM0OVY5Ni4zNzF6ICAgIE05My4yMjQsMTc3LjY2M2MwLDIuOTQxLTIuNDAzLDUuMzQ5LTUuMzQ3LDUuMzQ5SDcxLjQ3N2MtMi45NDEsMC01LjM0Ny0yLjQwNy01LjM0Ny01LjM0OXYtMTYuMzk2ICAgYzAtMi45NDUsMi40MDUtNS4zNTQsNS4zNDctNS4zNTRoMTYuNDAxYzIuOTQ0LDAsNS4zNDcsMi40MDgsNS4zNDcsNS4zNTRWMTc3LjY2M3ogTTkzLjIyNCwxMzcuMDE4ICAgYzAsMi45NDEtMi40MDMsNS4zNDUtNS4zNDcsNS4zNDVINzEuNDc3Yy0yLjk0MSwwLTUuMzQ3LTIuNDAzLTUuMzQ3LTUuMzQ1di0xNi40MDFjMC0yLjk0MSwyLjQwNS01LjM0OSw1LjM0Ny01LjM0OWgxNi40MDEgICBjMi45NDQsMCw1LjM0NywyLjQwNyw1LjM0Nyw1LjM0OVYxMzcuMDE4eiBNOTMuMjI0LDk2LjM3MWMwLDIuOTQxLTIuNDAzLDUuMzQ2LTUuMzQ3LDUuMzQ2SDcxLjQ3NyAgIGMtMi45NDEsMC01LjM0Ny0yLjQwNS01LjM0Ny01LjM0NlY3OS45N2MwLTIuOTQxLDIuNDA1LTUuMzQ5LDUuMzQ3LTUuMzQ5aDE2LjQwMWMyLjk0NCwwLDUuMzQ3LDIuNDA4LDUuMzQ3LDUuMzQ5Vjk2LjM3MXogICAgTTEzMy44NzIsMTc3LjY2M2MwLDIuOTQxLTIuNDA1LDUuMzQ5LTUuMzQ3LDUuMzQ5aC0xNi40MDNjLTIuOTQxLDAtNS4zNDctMi40MDctNS4zNDctNS4zNDl2LTE2LjM5NiAgIGMwLTIuOTQ1LDIuNDA1LTUuMzU0LDUuMzQ3LTUuMzU0aDE2LjQwM2MyLjk0MSwwLDUuMzQ3LDIuNDA4LDUuMzQ3LDUuMzU0VjE3Ny42NjN6IE0xMzMuODcyLDEzNy4wMTggICBjMCwyLjk0MS0yLjQwNSw1LjM0NS01LjM0Nyw1LjM0NWgtMTYuNDAzYy0yLjk0MSwwLTUuMzQ3LTIuNDAzLTUuMzQ3LTUuMzQ1di0xNi40MDFjMC0yLjk0MSwyLjQwNS01LjM0OSw1LjM0Ny01LjM0OWgxNi40MDMgICBjMi45NDEsMCw1LjM0NywyLjQwNyw1LjM0Nyw1LjM0OVYxMzcuMDE4eiBNMTMzLjg3Miw5Ni4zNzFjMCwyLjk0MS0yLjQwNSw1LjM0Ni01LjM0Nyw1LjM0NmgtMTYuNDAzICAgYy0yLjk0MSwwLTUuMzQ3LTIuNDA1LTUuMzQ3LTUuMzQ2Vjc5Ljk3YzAtMi45NDEsMi40MDUtNS4zNDksNS4zNDctNS4zNDloMTYuNDAzYzIuOTQxLDAsNS4zNDcsMi40MDgsNS4zNDcsNS4zNDlWOTYuMzcxeiAgICBNMTc0LjUxOSwxNzcuNjYzYzAsMi45NDEtMi40MDUsNS4zNDktNS4zNSw1LjM0OWgtMTYuMzk4Yy0yLjk0MywwLTUuMzQ5LTIuNDA3LTUuMzQ5LTUuMzQ5di01Ny4wNDcgICBjMC0yLjk0MSwyLjQwNS01LjM0OSw1LjM0OS01LjM0OWgxNi4zOThjMi45NDQsMCw1LjM1LDIuNDA3LDUuMzUsNS4zNDlWMTc3LjY2M3ogTTE3NC41MTksOTYuMzcxYzAsMi45NDEtMi40MDUsNS4zNDYtNS4zNSw1LjM0NiAgIGgtMTYuMzk4Yy0yLjk0MywwLTUuMzQ5LTIuNDA1LTUuMzQ5LTUuMzQ2Vjc5Ljk3YzAtMi45NDEsMi40MDUtNS4zNDksNS4zNDktNS4zNDloMTYuMzk4YzIuOTQ0LDAsNS4zNSwyLjQwOCw1LjM1LDUuMzQ5Vjk2LjM3MXogICAgTTE3NC41MTksNTIuMjg5YzAsMi45MzktMi40MDUsNS4zNDUtNS4zNSw1LjM0NUgzMC44MjljLTIuOTQxLDAtNS4zNTEtMi40MDUtNS4zNTEtNS4zNDVWMjIuMzM2YzAtMi45NDEsMi40MS01LjM0OSw1LjM1MS01LjM0OSAgIGgxMzguMzRjMi45NDQsMCw1LjM1LDIuNDA3LDUuMzUsNS4zNDlWNTIuMjg5eiIgZmlsbD0iIzVFODg5RSIvPjxwYXRoIGQ9Ik0xNjMuMjk1LDI4Ljc0NGgtMTEuNTljLTEuNTEzLDAtMi41NDEsMC4yOC0zLjA4OSwwLjg1MmMtMC41NDUsMC41NjctMC44MTgsMS42My0wLjgxOCwzLjIwMnY5LjAyNiAgIGMwLDEuNTY5LDAuMjczLDIuNjM1LDAuODE4LDMuMjAyYzAuNTQ4LDAuNTY3LDEuNTc2LDAuODUyLDMuMDg5LDAuODUyaDExLjU5YzEuNTIxLDAsMi41NjEtMC4yODUsMy4xMDUtMC44NTIgICBjMC41NDMtMC41NjcsMC44MTktMS42MzMsMC44MTktMy4yMDJ2LTkuMDI2YzAtMS41NzEtMC4yNzYtMi42MzUtMC44MTktMy4yMDJDMTY1Ljg1NSwyOS4wMjQsMTY0LjgxNiwyOC43NDQsMTYzLjI5NSwyOC43NDR6ICAgIE0xNjMuNjE5LDQyLjc5NWgtMTIuMjM2VjMxLjY1OWgxMi4yMzZWNDIuNzk1eiIgZmlsbD0iIzVFODg5RSIvPjwvZz48L3N2Zz4=" alt="">
                        <big>Cotización</big>
                    </li>
                    <li>por {{ $hours }} horas</li>
                    <li>Valor Hora Básica: $ {{ $hourlyPrice }}</li>
                    <li>
                        <h2>$ {{ array_get($result, 'regular.price')}}</h2>
                        <span>precio regular</span>
                    </li>

                    <li>Descuento de bloques</li>
                    <li>
                        <h2>$ {{ array_get($result, 'total.price')}}</h2>
                        <span>con descuento bloques</span>
                    </li>

                    @foreach($discounts as $discount)
                    <li>{{ $discount->rate * 100 }} % OFF por {{ $discount->description }}</li>
                    @endforeach
                    <li>
                        <h3>$ {{ array_get($result, 'total.after.0') }}</h3>
                        <span>final</span>
                    </li>
                    <li>
                        <button>Contratar</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection

@push('styles')
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);

.pricing {
    text-align: center;
    border: 1px solid #f0f0f0;
    color: #777;
    font-size: 14px;
    padding-left: 0;
    margin-bottom: 30px;
  font-family: 'Lato';
}
.pricing img {
    display: block;
    margin: auto;
    width: 32px;
}
.pricing li:first-child,
.pricing li:last-child {
    padding: 20px 13px;
}
.pricing li {
    list-style: none;
    padding: 13px;
}
.pricing li + li {
    border-top: 1px solid #f0f0f0;
}
.pricing big {
    font-size: 32px;
}
.pricing h3 {
    margin-bottom: 0;
  font-size: 36px;
}
.pricing span {
    font-size: 12px;
    color: #999;
    font-weight: normal;
}
.pricing li:nth-last-child(2) {
    padding: 30px 13px;
}
.pricing button {
    width: auto;
    margin: auto;
    font-size: 15px;
    font-weight: bold;
    border-radius: 50px;
    color: #fff;
    padding: 9px 24px;
    background: #aaa;
    opacity: 1;
    transition: opacity .2s ease;
  border: none;
  outline: none;
}
.pricing button:hover {
    opacity: .9;
}
.pricing button:active {
    box-shadow: inset 0px 2px 2px rgba(0, 0, 0, 0.1);
}
/* pricing color */
.p-green big,
.p-green h3 {
    color: #4c7737;
}
.p-green button {
    background: #4c7737;
}
.p-yel big,
.p-yel h3 {
    color: #ffbb42;
}
.p-yel button {
    background: #ffbb42;
}
.p-red big,
.p-red h3 {
    color: #e13c4c;
}
.p-red button {
    background: #e13c4c;
}
.p-blue big,
.p-blue h3 {
    color: #3f4bb8;
}
.p-blue button {
    background: #3f4bb8;
}
</style>
@endpush