puts "What is your name?"
user_name = gets.chomp
puts "Do you want to play RPS?"
answer = gets.chomp
answer.downcase!
if answer == "yes"
	puts "Awesome!"
	#This gets user's weapon choice
	puts "Choose Rock, Paper, or Scissors.."
	user_choice = gets.chomp
	user_choice.downcase!
	puts "#{user_name}'s choice: #{user_choice}!"
	if user_choice == "rock" || user_choice == "paper" || user_choice == "scissors"
		#This gives the computer a random weapon
		computer_choice = rand(0..100)
		if computer_choice < 33
			computer_choice = "rock"
		elsif (computer_choice > 33 && computer_choice < 67)
			computer_choice = "paper"
		else
			computer_choice = "scissors"
		end
		puts "Computer's choice: #{computer_choice}!"
		#This compares user_choice with computer_choice to determine a winner
		if user_choice == computer_choice
			puts "Its a tie!"
		elsif (user_choice == "rock" && computer_choice == "paper")
			puts "You lose!"
		elsif (user_choice == "rock" && computer_choice == "scissors")
			puts "You win!"
		elsif (user_choice == "paper" && computer_choice == "scissors")
			puts "You lose!"
		elsif (user_choice == "paper" && computer_choice == "rock")
			puts "You win!"
		elsif (user_choice == "scissors" && computer_choice == "rock")
			puts "You lose!"
		elsif (user_choice == "scissors" && computer_choice == "paper")
			puts "You win!"
		else
			puts "Something went wrong. Please try again!"
		end
	else 
		puts "Please choose a proper weapon!"
	end
elsif answer == "no"
	puts "Well that's too bad. :/"
	puts "Bye"
else
	puts "Sorry, I don't know what you said."
end
