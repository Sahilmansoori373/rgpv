#include <iostream>
#include <string>
using namespace std;

// int StringChallenge(string str) {
//     // Extract the start and end times from the input string
//     string start_time = str.substr(0, str.find('-'));
//     string end_time = str.substr(str.find('-') + 1);

//     // Extract the hours and minutes from the start and end times
//     int start_hour = stoi(start_time.substr(0, start_time.find(':')));
//     int start_minute = stoi(start_time.substr(start_time.find(':') + 1, 2));
//     string start_period = start_time.substr(start_time.length() - 2);

//     int end_hour = stoi(end_time.substr(0, end_time.find(':')));
//     int end_minute = stoi(end_time.substr(end_time.find(':') + 1, 2));
//     string end_period = end_time.substr(end_time.length() - 2);

//     // Convert the start and end times to 24-hour clock format
//     if (start_period == "pm" && start_hour != 12) {
//         start_hour += 12;
//     }
//     if (end_period == "pm" && end_hour != 12) {
//         end_hour += 12;
//     }

//     // Calculate the total number of minutes between the two times
//     int total_minutes = (end_hour * 60 + end_minute) - (start_hour * 60 + start_minute);

//     // Return the result
//     return total_minutes;
// }

// int main() {
//     string input;
//     cout << "Enter the time range (e.g. 9:00am-10:00am): ";
//     getline(cin, input);
//     int result = StringChallenge(input);
//     cout << "Total number of minutes: " << result << endl;
//     return 0;
// }
bool Stringchallenge(string str){
    int count = 0;
    for( int i=0; i<str.length(); i++){
         char c =  'x';
        if(str[i] == c){
            count++;
        }
        else count--;
    }
    if ( count == 0){
        return true;
    }
    else{
        return false;

    }
}

int main(){
    string a;
    cin>>a;
    if(Stringchallenge(a) == 1){
        cout<<"true";
    }
    else{
        cout<<"false";
    }
    return 0;
}
