@extends('frontend.home.landingpage')

@section('content')
    <section class="english-test-section py-8 bg-light">
        <div class="container">
            <h2 class="text-center mb-5"
                style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3A6B56; margin-top: 30px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 28px;">
                <span style="color: #FF9F00;">English</span>Questions
            </h2>

            <div class="card shadow p-4">
                <form action="#" method="POST">
                    @csrf

                    <div id="timer" class="text-end fw-bold text-danger mb-3" style="font-size: 20px;">
                        <span id="countdown"
                            style="display: inline-block; padding: 5px 10px; border: 2px solid red; border-radius: 5px;">
                            10:00
                        </span>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">1. Choose the correct spelling:</label>
                        <div>
                            <input type="radio" name="q1" value="a" required> a) Recieve <br>
                            <input type="radio" name="q1" value="b"> b) Receive <br>
                            <input type="radio" name="q1" value="c"> c) Recive <br>
                            <input type="radio" name="q1" value="d"> d) Receeve
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">2. Which word is a synonym for "Happy"?</label>
                        <div>
                            <input type="radio" name="q2" value="a" required> a) Sad <br>
                            <input type="radio" name="q2" value="b"> b) Joyful <br>
                            <input type="radio" name="q2" value="c"> c) Angry <br>
                            <input type="radio" name="q2" value="d"> d) Tired
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">3. Choose the correct verb form: "She ____ to school every
                            day."</label>
                        <div>
                            <input type="radio" name="q3" value="a" required> a) go <br>
                            <input type="radio" name="q3" value="b"> b) goes <br>
                            <input type="radio" name="q3" value="c"> c) going <br>
                            <input type="radio" name="q3" value="d"> d) gone
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">4. What is the past tense of "write"?</label>
                        <div>
                            <input type="radio" name="q4" value="a" required> a) Writed <br>
                            <input type="radio" name="q4" value="b"> b) Writing <br>
                            <input type="radio" name="q4" value="c"> c) Wrote <br>
                            <input type="radio" name="q4" value="d"> d) Writes
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">5. Which sentence is correct?</label>
                        <div>
                            <input type="radio" name="q5" value="a" required> a) She go to the market. <br>
                            <input type="radio" name="q5" value="b"> b) They was late. <br>
                            <input type="radio" name="q5" value="c"> c) He is reading a book. <br>
                            <input type="radio" name="q5" value="d"> d) I has a dog.
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Submit Answers</button>
                </form>
            </div>
        </div>
    </section>
@endsection


<style>
    .py-8 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }
</style>
