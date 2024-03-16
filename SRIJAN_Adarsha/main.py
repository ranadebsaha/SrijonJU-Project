import re
import long_response as long

def massage_probality(user_massage, recognised_word, single_response=False,required_word=[]):
    massage_certainy = 0
    has_require_word = True

    for word in user_massage:
        if word in recognised_word:
            massage_certainy +=1
    
    #Calculates the percent of recognised word in a user massage
    pecentage = float(massage_certainy) / float(len(recognised_word))

    for word in required_word:
        if word not in user_massage:
            has_required_words = False
            break

    if has_require_word or single_response:
        return int(pecentage*100)
    else:
        return 0

def check_all_massage(massage):
    highest_prob_list = {}
    def response(bot_response, list_of_words, single_response=False, required_word=[]):
        nonlocal highest_prob_list
        highest_prob_list[bot_response]=massage_probality(massage, list_of_words, single_response,required_word)
    #Responses-------------------------
    response('Hello!',['hello','hi','sup', 'heyo'], single_response=True)
    response('I\'m doing fine and you?',['how','are','you', 'doing'], required_word=['how'])
    response('Thank you!',['i','love','code', 'palace'], required_word=['code','palace'])
    response(long.R_EATING,['what','you','eat'],required_word=['you','eat'])
    response(long.R_CRIME_120,['Concealing' ,'design', 'to' ,'commit' ,'offence', 'punishable', 'with', 'imprisonment'],required_word=['120'])

    best_match=max(highest_prob_list,key=highest_prob_list.get)
    # print(highest_prob_list)
    return long.unknown() if highest_prob_list[best_match] <1 else best_match

def get_response(user_input):
    split_massage = re.split(r'\s+|[,;?!.-]\s*', user_input.lower())
    response = check_all_massage(split_massage)
    return response

# Testing the response system
while True:
    print('Bot : '+ get_response(input('You: ')))