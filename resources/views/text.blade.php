<ul class="user-chat">
    <li>
        <img src="{{asset('icon/user.svg')}}" width="45">
    </li>
    <li style="margin-left: 10px;"><strong>Helpidio Mateus</strong></li>
    <li style="margin-left: 50vh;">
        <img src="{{asset('icon/more-circle-horizontal.svg')}}" alt="" width="30">
    </li>
</ul>
<div class="container mt-4">
    <div class="message-sepatator mb-3"></div>
    <div class="message-scrollview mb-3" style="overflow: auto; max-height: 300px;">
        <ul class="received-message">
            <li>
                <div class="card card-body mb-3" style="max-width: 100vh; background-color:gainsboro;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit temporibus esse illo ipsum voluptas sit, nisi sunt suscipit quae iste cupiditate consectetur inventore adipisci, qui dolorem nam distinctio, omnis aliquam.</p>
                </div>
            </li>
        </ul>

        <ul class="sent-message" style="list-style: none;">
            <li>
                <div class="card card-body mb-3" style="max-width: 100vh; background-color: #61c200;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quam eligendi dolores iusto, quod modi dolorum sed ab cupiditate earum laborum vero ea, consequuntur, repellendus tempora ducimus praesentium cumque illo?</p>
                </div>
            </li>
        </ul>
    </div>

    <ul style="list-style: none; display:flex;">
        <textarea class="form-control me-2" name="" cols="40" rows="2" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);"></textarea>
        <input type="image" src="{{asset('icon/send.svg')}}" width="30">
    </ul>
</div>

