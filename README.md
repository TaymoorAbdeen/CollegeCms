# Kirkuk CMS
 a content management system for universities built in laravel framework.
It has three user types 

| Type | Role |
| ----------- | ----------- |
| Admin | Gets to post & edit marks, post & edit timetable, give out the registration number for lecturers and students within department |
| Lecturers | Post & edit lectures, post & edit absence, view department timetable|
| Students | View marks, absence, timetables, profile|

---
# How it works?
You visit the registration office and they give you an id which is associated with the college and department that you're studying in,
then you register by entering the id given to you and complete the sign-up process. 
When you complete sign up the main page shows up with a sidebar that is 
relative to your role.

 ### If you are an admin you will see:
1. Dashboard.
2. Post or edit marks.
3. Post timetable.
4. Update timetable.
5. Create ids.
6. View profile.
7. Logout.

 ### If you are a lecturer you will see:
1. Post lectures.
2. Update or delete lecture.
3. Edit absence.
4. View profile.
5. Logout.

### If you are a student you will see: 
1. Lectures.
2. Marks.
3. Absence.
4. Timetable.
5. Profile.
6. Logout.
---
# Conclusion
> While developing this app I paid no attention to security vulnerabilities so I wouldn't recommend using it for anything than just to experiment with it.


