@include('partials.head')

<main>
    <div class="edit">
        <div class="create-student">
            <a href="/Class" class="back">Back</a>
        </div>

        <div class="edit-form">
            <h1 class="title-stud">Edit Class</h1>
            <div class="create-stud">
                <form action="/class/{{ $class->id }}" method="POST">
                    @method('PUT') 
                    @csrf
                    <label for="class_name">Class Name</label>
                    <input class="input-form" type="text" id="class_name" name="class_name" placeholder="" value="{{ $class->class_name }}" required>
                
                    <label for="class_num">Class Numeric</label>
                    <input class="input-form" type="text" id="class_num" name="class_num" placeholder="" value="{{ $class->class_num }}" required>
                
                    <label for="class_sec">Class Section</label>
                    <input class="input-form" type="text" id="class_sec" name="class_sec" placeholder="" value="{{ $class->class_sec }}" required>

                    <label for="class_prof">Class Professor</label>
                    <select name="class_prof" id="classprof">
                        <option value="{{ $class->class_prof }}" class="line">{{ $class->class_prof }}</option>
                        @foreach ($professor as $prof)
                        <option value="{{ $prof->fname }} {{ $prof->lname }}">{{ $prof->fname}} {{ $prof->lname }}</option>
                        @endforeach 
                    </select>
                
                    <label for="class_subj">Class Subject</label>
                    <select name="class_subj" id="class_subj">
                        <option value="{{ $class->class_subj }}" class="line">{{ $class->class_subj }}</option>
                        @foreach ($subject as $subj)
                            <option value="{{ $subj->subj_name }}">{{ $subj->subj_name }}</option>
                        @endforeach
                    </select>

                    <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
                        update
                        </span>Update Class</button>
                </form>
            </div>
        </div>
           
    </div>
</main>
    
          


@include('partials.foot')