@extends ('indexlayout')

@section ('test')


<nav class="navbar fixed-top">
            <div class="container">
                <a class="navbar-brand">
                    <img src="img/logga.svg" width="40" height="40" class="d-inline-block align-top" alt="Logga" loading="lazy">
                    MempaLso
                </a>
                <!-- <img src="img/logga.svg" alt="logga" style="height: 3em;">
                <h1 id="title">MempaLso</h1> -->
                
                <div id="menuToggle">
                    <input type="checkbox">
                    <span></span>
                    <span></span>
                    <span></span>
                
                    <ul id="menu">
                        <a class="menu-link" href="#"><li><img src="img/home-white-18dp.svg" alt="home" id="icon">Home</li></a>
                        <a class="menu-link" href="#learnMorebtn"><li><img src="img/info-white-18dp.svg" alt="info" id="icon">Info</li></a>
                        <a class="menu-link" href="#forumbtn"><li><img src="img/forum-white-18dp.svg" alt="forum" id="icon">Forum</li></a>
                    </ul>
                </div>
                <!-- <span></span>
                <span></span>
                <span></span> -->
            </div>
        </nav>

    <div class="container h-100 padding-top">
        <div class="row py-5 my-3">
            <div class="col text-center">
                <p> <b>Lso-Man</b> possibly the best bobbleheaded flailing friendshipsman out there!</p>
                <a href="#learnMorebtn"><button class="btn btn-light" id="learnMorebtn">Learn More</button></a>
            </div> 
        </div>

        <div class="row py-5 my-5">
            <div class="col text-center">

                <div class="container text-center">
                    <img src="/img/IMG_7522.png" class="img-fluid" alt="Lso-Man!">
                    <p>A simple forum puts Lso-Man in stores!</p>
                </div>
        
                <a href="#forumbtn"><button class="btn btn-light" id="forumbtn">Forum</button></a>
        
            </div>
        </div>


    
        <div class="row pt-5 pb-3">
            <div class="col text-center">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><p>Email</p></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-light">By submitting you are agreeing to us using your personlized data to nofity you of when this product is released.
                            This information will be deleted as soon as this product is put forward to the market or released from development.</small>
                    </div>
            </div>
        </div>
        <div class="row pb-5 mb-5">
                <div class="col text-center">

                    <p>I'd pay:</p>
                    <select class="custom-select my-1 mr-sm-2 w-50" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">100kr</option>
                        <option value="2">200kr</option>
                        <option value="3">300kr</option>
                    </select>
                </form>
                <a href="#subbtn"><button type="submit" class="btn btn-light" id="subbtn">Submit</button></a>
            </div>
        </div>

    <div class="row py-5 my-5">
        <div class="col text-center">
            <div class="container text-center">
                <p>Thank you for your answer!</p>
            </div>
             <a href="#"><button class="btn btn-light" id="backtotopbtn">Back to top</button></a>
        </div>
    </div>


@endsection ('test')