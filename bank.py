from abc import ABC, abstractmethod
class Account(ABC):
    def __init__(self, account_number, initial_balance=0):
        self.account_number = account_number
        self._balance = initial_balance  # Encapsulated balance

    @abstractmethod
    def account_type(self):
        pass

    def deposit(self, amount):
        if amount > 0:
            self._balance += amount
            print(f'Deposited ${amount:.2f} to account {self.account_number}.')
        else:
            raise ValueError("Deposit amount must be positive.")

    def withdraw(self, amount):
        if amount <= self._balance:
            self._balance -= amount
            print(f'Withdrew ${amount:.2f} from account {self.account_number}.')
        else:
            raise ValueError("Insufficient balance.")

    def get_balance(self):
        return self._balance

# Savings Account Class
class SavingsAccount(Account):
    def account_type(self):
        return "Savings Account"

# Checking Account Class
class CheckingAccount(Account):
    def account_type(self):
        return "Checking Account"

# Customer Class
class Customer:
    def __init__(self, name, customer_id):
        self.name = name
        self.customer_id = customer_id
        self.accounts = []

    def add_account(self, account):
        self.accounts.append(account)
        print(f'Account {account.account_number} added for customer {self.name}.')

    def view_accounts(self):
        for account in self.accounts:
            print(f'Account Number: {account.account_number}, Type: {account.account_type()}, Balance: ${account.get_balance():.2f}')
            choice = input("Do you want to remove or update this account? (remove/update/none): ")
        if choice.lower() == "remove":
            self.accounts.remove(account)
            print("Account removed.")
        elif choice.lower() == "update":
            new_balance = float(input("Enter the new balance: "))
            account.deposit(new_balance - account.get_balance())  # Adjust balance directly
            print("Account updated.")
# Transaction Class
class Transaction:
    def __init__(self, account, amount, transaction_type):
        self.account = account
        self.amount = amount
        self.transaction_type = transaction_type

    def execute(self):
        if self.transaction_type == 'deposit':
            self.account.deposit(self.amount)
        elif self.transaction_type == 'withdraw':
            self.account.withdraw(self.amount)
        else:
            raise ValueError("Invalid transaction type. Use 'deposit' or 'withdraw'.")

# Example of usage
if __name__ == "__main__":
    # Creating customers
    customer1 = Customer("Alice Smith", "C001")
    customer2 = Customer("Bob Johnson", "C002")

    # Creating accounts
    savings_acc = SavingsAccount("SA001", 1000)
    checking_acc = CheckingAccount("CA001", 500)

    # Adding accounts to customers
    customer1.add_account(savings_acc)
    customer2.add_account(checking_acc)

    # Viewing accounts
    print("\nCustomer Accounts:")
    customer1.view_accounts()
    customer2.view_accounts()

    # Performing transactions
    transaction1 = Transaction(savings_acc, 200, 'deposit')
    transaction1.execute()

    transaction2 = Transaction(checking_acc, 100, 'withdraw')
    transaction2.execute()

    # Final balance
    print("\nFinal Balances:")
    customer1.view_accounts()
    customer2.view_accounts()
