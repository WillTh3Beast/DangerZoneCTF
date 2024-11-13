import time

def draw_mitsuko():
    mitsuko_face = r"""
       ____________
      /            \
     |  O       O  |
     |      ^      |
     |    \___/    |
      \___________/
    """
    print(mitsuko_face)


def mitsuko_greeting():
    greetings = [
        "I'm Mitsuko Miyazumi. I didn't come all the way from Japan to deal with idiots.",
        "Don't waste my time. I have work to do.",
        "Here is my ssh account login mitsuko:AI_lov3_krieger",
        "I am leaving now. Don't make me regret giving you my password!"
    ]
    for line in greetings:
        print(f'Mitsuko: {line}')
        time.sleep(1.5)


def main():
    draw_mitsuko()
    time.sleep(1)
    mitsuko_greeting()

if __name__ == "__main__":
    main()

