import random

R_EATING = "I dont like eathing anything"

R_CRIME_120 = "Whoever, intending to facilitate or knowing it to be likely that he will thereby facilitate the commission of an offence punishable with imprisonment, voluntarily conceals, by any act or illegal omission, the existence of a design to commit such offence, or makes any representation which he knows to be false respecting such design, "

def unknown():
    reponse = [
        'Could you please re-phrase that?',
        "...",
        "Sounds about right",
        "What does that mean?"
    ][random.randrange(4)]
    return reponse
