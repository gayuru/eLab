CREATE TABLE students {
    student_id  VARCHAR(25),
    student_fname   VARCHAR(50),
    student_lname   VARCHAR(50),
    PRIMARY KEY student_id
};

CREATE TABLE teachers {
    teacher_id  VARCHAR(25),
    teahcer_fname   VARCHAR(50),
    teacher_lname   VARCHAR(50),
    PRIMARY KEY teacher_id
};

CREATE TABLE skills {
    skill_id    VARCHAR(25),
    skill_name  VARCHAR(75),
    skill_category  VARCHAR(50),
    PRIMARY KEY skill_id
};