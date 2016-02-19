@extends('layouts.master')

@section('content')
    <div class="main-container">
        @include('layouts.partials.alerts')

        <div class="page-header">
            <h2><i class="fa fa-envelope"></i> Lob API</h2>
        </div>

        <div class="btn-group btn-group-justified">
            <a href="https://lob.com/docs" class="btn btn-primary">
                <i class="fa fa-check-square-o"></i> API Documentation
            </a>
            <a href="https://github.com/lob/lob-node" target="_blank" class="btn btn-primary">
                <i class="fa fa-code"></i> Lob Node Docs
            </a>
            <a href="https://dashboard.lob.com/register" target="_blank" class="btn btn-primary">
                <i class="fa fa-gear"></i> Create API Account
            </a>
        </div>

        <h3>Delivery routes in 10007</h3>

        <table class="table table-striped table-bordered"><thead><tr><th>Route</th><th># of Residential Addresses</th><th># of Business Addresses</th></tr></thead><tbody><tr><td>B099</td><td>0</td><td>0</td></tr><tr><td>C000</td><td>0</td><td>0</td></tr><tr><td>C001</td><td>455</td><td>38</td></tr><tr><td>C003</td><td>13</td><td>12</td></tr><tr><td>C004</td><td>152</td><td>47</td></tr><tr><td>C005</td><td>0</td><td>34</td></tr><tr><td>C006</td><td>0</td><td>138</td></tr><tr><td>C008</td><td>254</td><td>93</td></tr><tr><td>C009</td><td>454</td><td>48</td></tr><tr><td>C012</td><td>239</td><td>46</td></tr><tr><td>C013</td><td>441</td><td>40</td></tr><tr><td>C014</td><td>0</td><td>23</td></tr><tr><td>C017</td><td>0</td><td>51</td></tr><tr><td>C018</td><td>0</td><td>157</td></tr><tr><td>C019</td><td>356</td><td>54</td></tr><tr><td>C020</td><td>1</td><td>122</td></tr><tr><td>C021</td><td>6</td><td>76</td></tr><tr><td>C022</td><td>400</td><td>62</td></tr><tr><td>C023</td><td>43</td><td>85</td></tr><tr><td>C098</td><td>440</td><td>29</td></tr><tr><td>C099</td><td>18</td><td>97</td></tr></tbody></table>
        <br>
    </div>
@stop